<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'user_id',
        'status',
        'price',
        'payment',
        'note',
        'tax',
        'warehouse_price',
        'profit',
        'shipping',
        'coupon',
        'time_create',
        'time_signing',
    ];

    public function orderItem() {
        return $this->hasMany(OrderItem::class);
    }

    public function customer() {
        return $this->belongsTo(Customer::class);
    }

    public function seller() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
