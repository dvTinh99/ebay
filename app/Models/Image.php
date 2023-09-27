<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'image_link',
        'image_type',
    ];

    public function getImageLinkAttribute($data) {
        return '/database/ebay' . $data;        ;
    }
}
