<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    const PENDING = 0;
    const SENT = 1;

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

    public function scopePendingDataStatus($query, $paymentId){
        return $query->where('payment_id', $paymentId)
                              ->where('status', self::PENDING);
     }
}