<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'band_id',
        'don_vi',
        'so_luong_mua_toi_thieu',
        'tag',
        'ma_vach',
        'returnabel',
        'price',
        'price_discount',
        'price_discount_type',
        'price_discount_from',
        'price_discount_to',
        'dinh_luong',
        'sku',
        'out_site_link',
        'text_link',
        'description',
        'time_ship',
    ];
}
