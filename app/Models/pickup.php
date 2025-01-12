<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pickup extends Model
{
    // Tentukan tabel yang digunakan
    protected $table = 'pickups';

    // Tentukan kolom yang bisa diisi
    protected $fillable = [
        'name',
        'phone_number', 
        'address',
        'pickup_date',
        'pickup_time',
        'status'
    ];
}
