<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'ref_of',
        'password',
        'role',
        'wallet',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function bank() {
        return $this->hasOne(Bank::class);
    }

    public function exchanges() {
        return $this->hasMany(Exchange::class);
    }

    public function address() {
        return $this->hasMany(Address::class);
    }

    public function AauthAcessToken(){
        return $this->hasMany(OauthAccessToken::class);
    }

    public function orders() {
        return $this->hasMany(Order::class);
    }

}
