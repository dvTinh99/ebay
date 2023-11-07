<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    use HasFactory;

    protected $fillable = [
        'withdraw',
        'status',
        'user_id',
        'seller_note',
        'master_note',
        'custom_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
