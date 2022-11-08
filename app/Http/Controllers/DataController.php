<?php

namespace App\Http\Controllers;

use App\Actions\PaymentAction;
use App\Actions\ServiceProviderAction;
use App\Models\Data;
use App\Models\Payment;
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

        $mtn = $serviceProvider->cachedMtn();
        $airtel = $serviceProvider->cachedAirtel();
        $glo = $serviceProvider->cachedGlo();
        $etisalat = $serviceProvider->cachedEtisalat();

        return view('data', compact('mtn', 'airtel', 'glo', 'etisalat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function validateValues(ServiceProviderAction $serviceProvider, Request $request)
    {
        $values = $request->values;
    
        if(empty($values)){
            return response()->json(['error' => 'Incorrrect Data'],400);
        }

        $mtn = $serviceProvider->cachedMtn();
        $airtel = $serviceProvider->cachedAirtel();
        $glo = $serviceProvider->cachedGlo();
        $etisalat = $serviceProvider->cachedEtisalat();
       
        $mergedArray =  array_merge($mtn, $airtel, $glo, $etisalat);

        $arraycode =[];

        foreach($mergedArray as $arrays){
            array_push ($arraycode, $arrays['code']);
        }

        $check = false;
      
        foreach($values as $value){
            if(!in_array($value, $arraycode)){
                $check = true;
            }
        }

        if($check){
            return response()->json('Error',400);
        }else{
            return response()->json('validated',200);
        }

        
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
