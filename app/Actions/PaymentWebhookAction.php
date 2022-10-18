<?php

namespace App\Actions;

use App\Models\Payment;
use Illuminate\Http\Request;
use App\Http\Requests\Api\PaymentWebhookRequest;

class PaymentWebhookAction{

    public function webhook(PaymentWebhookRequest $request){

        $hash = hash_hmac(
            "sha256",
            json_encode($request->data),
            env('KORAPAY_SECRET'),
            $binary = false
        );


        if($request->headers->get('x-korapay-signature') === $hash){
            if($request->data['status'] == 'success'){
                $payment =  Payment::where('reference_id', $request->data['reference'])->first();
                    if($payment){
                        $payment->status = "success";
                        $payment->save();
                        return true;
                    }
            }
        }
                return false;
        
    }

    

}
