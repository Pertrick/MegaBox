<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Payment;

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

    public function getSuccessfulDataPaymentAttribute($id){
        return  DB::table('data')
           ->join('payments', 'payments.id', '=', 'data.payment_id')
           ->where('payments.status', '=', 'success')
           ->where('payments.service', '=', 'data')
           ->where('data.status', '=', self::PENDING)
           ->where('data.payment_id', '=', $id)
           ->select('data.id', 'data.phone_number','data.network_code')
           ->get();
   
       }
}