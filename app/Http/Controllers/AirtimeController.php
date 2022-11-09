<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Airtime;
use Illuminate\Support\Facades\DB;
use App\Jobs\StartBuildJob;
use Illuminate\Http\Request;
use App\Actions\PaymentAction;
class AirtimeController extends Controller
{
    public function index(){
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
        $email =$request->email;
        $uploadedData = $request->data;
        $uploadedData = Json_decode($uploadedData, true);

        foreach ($uploadedData as ["amount" => $amount]) {
            $total_amount = $total_amount + $amount;
        }


        $payout = $payment->paymentCheckout($email,$total_amount);
        $reference =$payout['reference'];

        if($payout){

            DB::transaction(function () use ($email, $uploadedData, $reference, $total_amount): void {

                $payment = new Payment();
                $payment->savePayment("user$reference", $email, "Airtime", $reference, 'NGN', $total_amount);

                $paymentId =$payment->id;
                foreach ($uploadedData as $value) {
                    $data = new Airtime();
                    $data->saveAirtime($value, $email,$paymentId);
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
