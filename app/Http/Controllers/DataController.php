<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\datas;
use App\Jobs\StartBuildJob;
use Illuminate\Http\Request;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'email' => ['required', 'string'],
        //     'data' => ['required', 'json'],
        // ]);

        // $uploadedData = Json_decode($request->data);

        // $email = $request->email;

        // $count = count($uploadedData);
        // foreach($uploadedData as $value){
            
        //     $data = new datas();
        //     $data->name = $value->name;
        //     $data->phone = '08121326225';
        //     $data->network = 'mtn';
        //     $data->amount = '200';
        //     $data->status = false;
        //     $data->reference_code = "MEGA".rand();
        //     $data->uploaded_by = $email;

        //     $reference = $data->reference_code;

           
        // }

//    dd($request->all());
        try {
            $curl = curl_init();

            curl_setopt_array($curl, array(
              CURLOPT_URL => "https://api.korapay.com/merchant/api/v1/charges/initialize",
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "POST",
              CURLOPT_POSTFIELDS => "{\r\n    \"amount\": \"1000\",\r\n    \"redirect_url\": \"https://yourRedirectURL.com\",\r\n    \"currency\": \"NGN\",\r\n    \"reference\": \"ogochukwuebu34007\",\r\n    \"narration\": \"New payment\",\r\n    \"customer\": {\r\n        \"name\": \"prisca\",\r\n        \"email\": \"priscavincent2018@gmail.com\"\r\n    }\r\n}",
              CURLOPT_HTTPHEADER => array(
                "authorization: Bearer sk_test_YQzv7ubiFLmRwyCJCspRCtpkEZ8t5PprnzgC5cuG",
                "cache-control: no-cache",
                "content-type: application/json",
                "postman-token: 283462cc-af04-13d3-1e18-1133fe29f0c9"
              ),
            ));
            
            $response = curl_exec($curl);

            // dd($response);
            $err = curl_error($curl);
            
            curl_close($curl);
            
            if ($err) {
              echo "cURL Error #:" . $err;
            } else {
              echo $response;
            }
        }catch (\Exception $e){
            return redirect()->back()->with('status', 'Fatai error while processing payment');
        }

        $request->validate([
            'email' => ['required', 'string'],
            'data' => ['required', 'json'],
        ]);

        $uploadedData = Json_decode($request->data);

        $email = $request->email;

        $count = count($uploadedData);
        foreach($uploadedData as $value){
            
            $data = new datas();
            $data->name = $value->name;
            $data->phone = '08121326225';
            $data->network = 'mtn';
            $data->amount = '200';
            $data->status = false;
            $data->reference_code = 'MEGABOX'.rand();
            $data->uploaded_by = $email;

            if($data->save()){
                $count--;
            }
        }

        if($count == 0){
            return response()->json(['success' => $count]);
        }
    }

       
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function show(Data $data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function edit(Data $data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Data $data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function destroy(Data $data)
    {
        //
    }
}
