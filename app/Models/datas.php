<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datas extends Model
{
    use HasFactory;

    protected $table = 'datas';
protected $fillable = [
    'name',
    'phone',
    'network',
    'amount',
    'uploaded_by',
];

}
