<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[
        'title','description','total','unit','price'
        ];

        public function images(){
            return $this->hasMany(Image::class);
        }
    }

