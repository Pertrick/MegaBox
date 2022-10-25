<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    public function saveData($data,$email, $type){
            $this->phone_number = $data['phone_number'];
            $this->network = $data['network'];
            $this->amount = $data['amount'];
            $this->status = false;
            $this->uploaded_by = $email;

            $this->save();

    }
}