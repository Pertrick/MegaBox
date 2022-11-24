<?php

namespace App\Actions;
use App\Models\Data;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class PurchaseData
{

    public function buyData($data)
    {
        foreach($data as $value){
            $id =$value->id;
            $network_code = $value->network_code;
            $phone_number = $value->phone_number;

            $payload='{
                 "service":"data",
                 "coded": "'.$network_code.'",
                 "phone": "'.$phone_number.'"
            }';

            Log::info("data purchase payload");
            Log::info($payload);

            echo $payload;

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
              CURLOPT_SSL_VERIFYHOST =>false,
              CURLOPT_SSL_VERIFYPEER =>false,
              CURLOPT_POSTFIELDS =>$payload,
              CURLOPT_HTTPHEADER => array(
                'Authorization: ' . env('MCD_PAYMENT_KEY'). '',
                'Content-Type: application/json'
              ),
            ));

            $response = curl_exec($curl);
            curl_close($curl);

            Log::info("data purchase response");
            Log::info($response);

            echo $response;


            $response = json_decode($response, true);

            if($response['success'] == 1){
               $data = Data::where('id', $id)->first();
               $data->status = Data::SENT;
               $data->sent_at = Carbon::now();
               $data->save();
                Log::info("Data status updated");
            }
        }

        return true;

    }


}
