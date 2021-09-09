<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Schema\ForeignKeyDefinition;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password', 'first_name', 'last_name',
        'email_verified', 'mobile', 'mobile_verified', 'shipping_adress', 'billing_adress'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function wishlist()
    {
        return $this->hasOne(WishList::class);
    }
    public function reviews(){
        return $this->hasMany(Review::class);
    }
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
    public function shipments()
    {
        return $this->hasMany(Shipment::class);
    }
    public function shippingAdress()
    {
        return $this->hasMany(Adress::class, 'id','shipping_adress');
    }
    public function billingAdress()
    {
        return $this->hasMany(Adress::class, 'id','billing_adress');
    }

}
