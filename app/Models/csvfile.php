<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class csvfile extends Model
{
    use HasFactory;
    protected $table = 'csvfiles';

    protected $fillable = [
        'name',
        'phone',
        'network',
        'amount',
    ];
};
