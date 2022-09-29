<?php

namespace App\Http\Controllers;

use App\Models\csvfile;
use Illuminate\Http\Request;

class AirtimeController extends Controller
{
    private $datas = [];
   public function preview(Request $request)
   {
    $path = $request->file('file')->getRealPath();
        $records = array_map('str_getcsv', file($path));

        if (! count($records) > 0) {
           return 'Error...';
        }

        // Get field names from header column
        $fields = array_map('strtolower', $records[0]);

        // Remove the header column
        array_shift($records);

        foreach ($records as $record) {
            if (count($fields) != count($record)) {
                return 'csv_upload_invalid_data';
            }

            // Decode unwanted html entities
            $record =  array_map("html_entity_decode", $record);

            // Set the field name as key
            $record = array_combine($fields, $record);

            // Get the clean data
                $datas = $this->clear_encoding_str($record);
                 $datas = [$record];
                //  dd($datas);
                return view('airtime.preview', compact('datas'));
        }

        
   }

   private $rows = [];
    
    public function index(Request $request)
    {
        $path = $request->file('file')->getRealPath();
        $records = array_map('str_getcsv', file($path));

        if (! count($records) > 0) {
           return 'Error...';
        }

        // Get field names from header column
        $fields = array_map('strtolower', $records[0]);

        // Remove the header column
        array_shift($records);

        foreach ($records as $record) {
            if (count($fields) != count($record)) {
                return 'csv_upload_invalid_data';
            }

            // Decode unwanted html entities
            $record =  array_map("html_entity_decode", $record);

            // Set the field name as key
            $record = array_combine($fields, $record);

            // Get the clean data
            $this->rows[] = $this->clear_encoding_str($record);
        }

        foreach ($this->rows as $data) {
            csvfile::create([
               'name' => $data['name'],
               'phone' => $data['phone'],
               'network' => $data['network'],
               'amount' => $data['amount'],
            ]);
        }
         return redirect()->back()->with('status', 'CSV file uploaded Successfully!');
        // return to_route('/');
    }
    
    private function clear_encoding_str($value)
    {
        if (is_array($value)) {
            $clean = [];
            foreach ($value as $key => $val) {
                $clean[$key] = mb_convert_encoding($val, 'UTF-8', 'UTF-8');
            }
            return $clean;
        }
        return mb_convert_encoding($value, 'UTF-8', 'UTF-8');
    }

}
