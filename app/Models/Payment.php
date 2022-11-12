<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    const AIRTIME = "airtime";
    const DATA ="data";
    const PENDING = "pending";
    const SUCCESS = "success";


    public function savePayment($user,$email,$service, $reference, $naira, $amount){
        $this->user = $user;
        $this->email = $email;
        $this->service  = $service;
        $this->reference_id = $reference;
        $this->currency = $naira;
        $this->amount = $amount;
        
        $this->save();

    }

    public function scopeSuccessAirtimePaymentId($query){
        return $query->where('status', self::SUCCESS)
                      ->where('service', self::AIRTIME)
                      ->pluck('id');
    }

    public function scopeSuccessDataPaymentId($query){
        return $query->where('status', self::SUCCESS)
                      ->where('service', self::DATA)
                      ->pluck('id');
    }
}
