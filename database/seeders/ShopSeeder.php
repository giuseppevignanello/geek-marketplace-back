<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('shops')->insert([
            "name" => "Super Store",
            "address" => "123 Main St",
            "piva" => "123456789",
            "photo" => "https=>//example.com/store-photo.jpg",
            "phone" => "+1234567890",
            "email" => "info@superstore.com",
            "user_id" => 1
        ]);
    }
}
