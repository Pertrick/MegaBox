<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $fillable =[
        'email',
        'data'
    ];

    public function saveData($data,$email, $paymentId){
            $this->phone_number = $data['phone_number'];
            $this->network_code = $data['network_code'];
            $this->amount = $data['amount'];
            $this->status = false;
            $this->payment_id = $paymentId;
            $this->uploaded_by = $email;

            $this->save();

    }
}