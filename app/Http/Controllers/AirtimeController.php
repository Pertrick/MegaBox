<?php

namespace App\Http\Controllers;

use App\Models\csvfile;
use Illuminate\Support\Facades\Request;

class AirtimeController extends Controller
{
    public function index(){
        return view('airtime');
    }
   

}
