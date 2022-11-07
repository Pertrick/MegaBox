<?php

namespace App\Http\Controllers;

use App\Actions\PaymentAction;
use App\Actions\ServiceProviderAction;
use App\Models\Data;
use App\Models\Payment;
use Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ServiceProviderAction $serviceProvider)
    {
        $mtn = Cache::rememberForever('mtn', function () use ($serviceProvider) {
            return $serviceProvider->mtnData()['data'];
        });

        $airtel = Cache::rememberForever('airtel', function () use ($serviceProvider) {
            return $serviceProvider->airtelData()['data'];
        });

        $etisalat = Cache::rememberForever('etisalat', function () use ($serviceProvider) {
            return $serviceProvider->etisalatData()['data'];
        });

        $glo = Cache::rememberForever('glo', function () use ($serviceProvider) {
            return $serviceProvider->gloData()['data'];

        });

        return view('data', compact('mtn', 'airtel', 'glo', 'etisalat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PaymentAction $payment, Request $request)
    {

        $request->validate([
            'email' => ['required', 'email'],
            'data' => ['required', 'json'],
        ]);

        $total_amount = 0;
        $email = $request->email;
        $uploadedData = trim($request->data);

        $uploadedData = Json_decode($uploadedData, true);
        // dd($uploadedData[0]["phone_number"]);
        //for phone validation
        foreach ($uploadedData as ["phone_number" => $phone]) {

            $validated = [$phone => 'required|numeric|min:11'];
            if (!$validated) {
                return redirect()->back()->with("message", "Phone number must be up to 11 digit");
            }
        }

        foreach ($uploadedData as ["amount" => $amount]) {
            $total_amount = $total_amount + $amount;
        }

        $payout = $payment->paymentCheckout($email, $total_amount);
        $reference = $payout['reference'];

        if ($payout) {

            DB::transaction(function () use ($email, $uploadedData, $reference, $total_amount): void {

                $payment = new Payment();
                $payment->savePayment("user$reference", $email, "data", $reference, 'NGN', $total_amount);

                $paymentId = $payment->id;
                foreach ($uploadedData as $value) {
                    $data = new Data();
                    $data->saveData($value, $email, $paymentId);
                }

            });

            return response()->json($payout);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function edit(Data $data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Data $data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function destroy(Data $data)
    {
        //
    }
}
