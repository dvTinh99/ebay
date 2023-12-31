<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerProduct extends Model
{
    use HasFactory;

    protected $table = 'product_user';

    protected $fillable = [
        'user_id',
        'product_id',
    ];

    public function product() {
        return $this->belongsTo(Product::class);
    }

    // seller, belongto user, column user_id
    public function seller() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
