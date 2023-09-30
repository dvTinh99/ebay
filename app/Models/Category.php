<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'father_id',
        'image',

    ];

    public function children() {
        return $this->hasMany(Category::class, 'father_id', 'id');
    }

    public function products() {
        return $this->hasMany(Product::class);
    }
}
