<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment',
        'parent_id',
        'seller_id',
        'sender_name',
        'product_id'
    ];

    // A comment can have many replies
    public function replies()
    {
        return $this->hasMany(Comments::class, 'parent_id');
    }

    // A comment belongs to a seller
    public function seller()
    {
        return $this->belongsTo(User::class);
    }

    // A comment belongs to a product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
