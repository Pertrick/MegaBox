<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use App\Actions\PaymentAction;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkout(PaymentAction $payment, Request $request)
    {
        $payout_link = $payment->paymentCheckout($request);
        if($payout_link){
            return response()->json($payout_link);
        }

    }

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
