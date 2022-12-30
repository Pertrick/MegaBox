<?php

namespace App\Http\Controllers;

use App\Actions\PaymentAction;
use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function verifyPayment(PaymentAction $payment, Request $request)
    {
        $referenceId =  $request->query('reference');
        $verifyPayment = $payment->verify($request);

        $payment = Payment::where('reference_id', $referenceId)->first();
        if(!$verifyPayment){
            return view('failedpage', compact('payment'));
        }
            return view('successpage', compact('payment'));
    }
}
