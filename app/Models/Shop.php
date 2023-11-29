<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;


    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function shop_typologies(){

        return $this->belongsToMany(ShopTypologies::class);
    }
}
