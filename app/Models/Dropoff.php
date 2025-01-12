<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dropoff extends Model
{
    use HasFactory;

    // Tentukan tabel yang digunakan
    protected $table = 'dropoffs';

    // Tentukan kolom yang bisa diisi
    protected $fillable = [
        'name',
        'phone_number',
        'address',
        'point',
        'status',
    ];
}
