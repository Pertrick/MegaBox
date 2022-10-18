<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Api\PaymentWebhookRequest;
use App\Actions\PaymentWebhookAction;

class PaymentWebhookController extends Controller
{
    public function paymentWebhook(PaymentWebhookAction $paymentWebhook, PaymentWebhookRequest $request){

        $payment = $paymentWebhook->webhook($request);

        if($payment){
            return response()->json(['success' => 'success'],200);
        }
        return response()->json(['error' => 'invalid'], 401);
    }
}
