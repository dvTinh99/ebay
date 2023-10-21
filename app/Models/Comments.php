<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'comment',
        'parent_id',
        'seller_id',
        'sender_name'
    ];

    // A comment belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

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
}
