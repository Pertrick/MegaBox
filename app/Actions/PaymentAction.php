<?php

namespace App\Actions;
use App\Models\Payment;
use Illuminate\Http\Request;
use App\Jobs\ProcessAirtime;
use App\Jobs\ProcessData;
use Illuminate\Support\Facades\Log;

class PaymentAction
{

    public function paymentCheckout($email, $amount)
    {
        $reference = substr(md5(uniqid()), 0, 10);
        $user = "user$reference";

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.korapay.com/merchant/api/v1/charges/initialize',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
            "reference": "' . $reference . '",
            "amount": "' . $amount . '",
            "currency": "NGN",
            "redirect_url" : "' . env('APP_URL') . 'verify",
                "customer": {
                    "name": "' . $user . '" ,
                    "email": "' . $email . '"
                }
            }',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: Bearer ' . env('KORAPAY_SECRET_KEY'),
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $response = json_decode($response, true);

        if ($response && $response['status'] == true) {
            $payout = $response['data'];

            return $payout;
        }
    }

    public function verify(Request $request)
    {
        $ref = $request->query('reference');
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.korapay.com/merchant/api/v1/charges/$ref",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . env('KORAPAY_SECRET_KEY'),
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $rep = json_decode($response, true);

        if ($rep['status'] && $rep['data']['status'] == "success") {
            $payment = Payment::where('reference_id', $rep['data']['reference'])->first();
            $payment->status= Payment::SUCCESS;
           if ($payment->save()){
                if($payment->service == Payment::AIRTIME){
                    ProcessAirtime::dispatch($payment->id);
                }elseif($payment->service == Payment::DATA){
                    ProcessData::dispatch($payment->id);
                }
                return true;
           }
            return false;
        }
    }

}
