<?php

namespace App\Actions;
use App\Models\Data;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class PurchaseData
{

    public function buyData($data)
    {   
        foreach($data as ['id' => $id, 'phone_number' => $phone_number, 'network_code' => $network_code]){

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
              CURLOPT_POSTFIELDS =>'{
                "service":"data",
                "coded": "' .$network_code .'",
                "phone": "' . $phone_number .'",
            }',
              CURLOPT_HTTPHEADER => array(
                'Authorization: mcd_key_fertyuilokmjnhgft56789807675434265fd',
                'Content-Type: application/json'
              ),
            ));

            $response = curl_exec($curl);
            curl_close($curl);
    
            $response = json_decode($response, true);

            dd($response);

            if($response['success'] == 1){
               $airtime = Airtime::where('id',$id)->first();
               $airtime->status = Airtime::SENT;
               $airtime->save();
            }
        }

        return true;
      
    }


}
