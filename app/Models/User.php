<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *xpx
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'ref_of',
        'address',
        'avatar',
        'ref_link',
        'password',
        'phone',
        'role',
        'approve',
        'cccd_front',
        'cccd_back',
        'giay_phep_kinh_doanh',
        'wallet',
        'total_views_day',
        'total_views',
        'update_views_at',
        'pass',
        'plan'
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

    public function AauthAcessToken(){
        return $this->hasMany(OauthAccessToken::class);
    }

    public function orders() {
        return $this->hasMany(Order::class);
    }

    public function sellerProduct() {
        return $this->hasMany(SellerProduct::class);
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class)->with(['category', 'images']);
    }

    public function shop() {
        return $this->hasOne(Shop::class);
    }

    public function withdraws() {
        return $this->hasMany(Withdraw::class);
    }
}
