<?php

namespace App\Actions;
use App\Models\Airtime;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class PurchaseAirtime
{

    public function buyAirtime($airtimes)
    {   
        foreach($airtimes as ['id' => $id, 'phone_number' => $phone_number, 'network' => $network, 'amount' => $amount]){

            $coded = $this->coded($network);

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
                "service":"airtime",
                "coded": "' .$coded .'",
                "phone": "' . $phone_number .'",
                "amount": "' . $amount .'"
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

    public function coded($network)
    {
       switch($network){
        case "MTN" : 
            $network = "m";
            break;
        case "AIRTEL" : 
            $network = "a";
            break;
        case "9MOBILE" : 
            $network = "9";
            break;
        case "GLO" : 
            $network = "g";
            break;
       } 

       return $network;

    }

}
