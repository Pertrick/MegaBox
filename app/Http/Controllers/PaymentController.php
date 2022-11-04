<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use App\Actions\PaymentAction;

class PaymentController extends Controller
{
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function verifyPayment(PaymentAction $payment, Request $request)
    {
        $verifyPayment = $payment->verify($request);

        if($verifyPayment){
            return redirect('/')->with('message', 'Payment confirmed successfully.');
        }
        return redirect('/')->with('message', 'Processing Payment!. You will recieved a confirmation message, when it is done.');
    }

   
}
