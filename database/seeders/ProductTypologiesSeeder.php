<?php

namespace Database\Seeders;

use App\Models\ProductTypologies;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTypologiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productsTypologies = config('productTypologies');

        foreach ($productsTypologies as $productsTypology) {
            $newProductTypology = new ProductTypologies();
            $newProductTypology->name = $productsTypology['name'];
            $newProductTypology->save();
        }
    }
}
