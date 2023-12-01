<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductTypologies;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = config('products');

        foreach ($products as $product) {
            $newProduct = new Product();
            $newProduct->name = $product['name'];
            $newProduct->description = $product['description'];
            $newProduct->price = $product['price'];
            $newProduct->is_visible = $product['is_visible'];
            $newProduct->productor = $product['productor'];
            $newProduct->photo = $product['photo'];
            $newProduct->shop_id = $product['shop_id'];
            $newProduct->save();

            // foreach($product['productTypologies'] as $typologyName){
            //     $typology = ProductTypologies::where("name", $typologyName)->first();
            //     $product -> product_typologies()->attach($typology->id);
            // }


        }
    }
}
