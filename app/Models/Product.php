<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function shops()
    {
        return $this->belongsTo(Shop::class);
    }

    public function productTypologies()
    {
        return $this->hasMany(ProductTypologies::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
