<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    protected $fillable=[
    'city','street_name','street_number','state','country','post_code'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
