<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'goi_nang_cap',
        'wallet'

    ];

    public function address() {
        return $this->hasMany(Address::class, 'user_id', 'id');
    }
}
