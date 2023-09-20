<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'use_default',
        'name',
        'owner',
        'number',
        'dinh_tuyen',
        'use_usdt',
        'link_usdt',
        'address_usdt',
    ];
}
