<?php

namespace App\Actions;
use App\Models\airtimes;
use App\Models\Data;
use App\Models\Airtime;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        if ($rep['status'] == true) {
            $payment = Payment::where('reference_id', $rep['data']['reference']);
            if ($payment->pluck('status')->first() == "success") {
                return true;
            }
            return false;
        }

    }

}
