<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopTypologies extends Model
{
    use HasFactory;

    public function shops(){
        return $this->belongsToMany(Shop::class);
    }
}
