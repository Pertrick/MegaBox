<?php

namespace App\Http\Controllers;

use App\Actions\PaymentAction;
use App\Models\Airtime;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AirtimeController extends Controller
{
    public function index()
    {
        return view('airtime');
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
        $uploadedData = $request->data;
        $uploadedData = Json_decode($uploadedData, true);

        foreach ($uploadedData as ["service" => $service]) {
            $serv = $service;
        }

        foreach ($uploadedData as ["phone_number" => $phone]) {
            $phones = $phone;
        }

        // $phone =  $uploadedData[0]["phone_number"];

        foreach ($uploadedData as ["amount" => $amount]) {
            $total_amount = $total_amount + $amount;
        }
        // dd($amount);

        $payout = $payment->paymentCheckout($email, $total_amount);
        $reference = $payout['reference'];

        if ($payout) {

            DB::transaction(function () use ($email, $uploadedData, $reference, $total_amount): void {

                $payment = new Payment();
                $payment->savePayment("user$reference", $email, "data", $reference, 'NGN', $total_amount);

                $paymentId = $payment->id;
                foreach ($uploadedData as $value) {
                    $data = new Airtime();
                    $data->saveAirtime($value, $email, $paymentId);
                }

            });

            return response()->json($payout);

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://test.mcd.5starcompany.com.ng/api/reseller/pay',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => '{
                "service" : "airtime",
                "coded": " ' . $serv . ' ",
                "phone": " ' . $phones . ' ",
                "amount": " ' . $amount . ' ",
                "reseller_price":" ' . $amount . ' "
            }',
                CURLOPT_HTTPHEADER => array(
                    'Authorization: mcd_key_fertyuilokmjnhgft56789807675434265fd',
                    'Content-Type: application/json',
                ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            // dd($response);
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
