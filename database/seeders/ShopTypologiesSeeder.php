<?php

namespace Database\Seeders;

use App\Models\ShopTypologies;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShopTypologiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shopTypologies = config("shopTypologies");

        foreach ($shopTypologies as $shopTypology) {
            $newShopTypology = new ShopTypologies();
            $newShopTypology->name = $shopTypology['name'];
            $newShopTypology->save();
        }
    }
}
