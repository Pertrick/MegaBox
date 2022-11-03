<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function airtime(Request $request)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://test.mcd.5starcompany.com.ng/api/reseller/list',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
            "service" : "airtime"
        }',
            CURLOPT_HTTPHEADER => array(
                'Authorization: mcd_key_fertyuilokmjnhgft56789807675434265fd',
                'Content-Type: application/json',
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $response = json_decode($response, true);
        $airtime = $response["data"];

         return view('airtime', compact('airtime'));
        
    }
    function data(){
       
      $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://test.mcd.5starcompany.com.ng/api/reseller/list',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>'{
            "service" : "data",
            "coded" : "m"
        }',
          CURLOPT_HTTPHEADER => array(
            'Authorization: mcd_key_fertyuilokmjnhgft56789807675434265fd',
            'Content-Type: application/json'
          ),
        ));
        
        $resp = curl_exec($curl);
        
        curl_close($curl);
        $datalist = json_decode($resp, true);
        $data = $datalist["data"];
        // dd($data);
         return view('data', compact('data'));
    }
}
