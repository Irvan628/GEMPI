<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'name', 'email', 'address', 'phone', 'password', 'points',
    ];

    protected $hidden = [
        'password',
    ];
}
