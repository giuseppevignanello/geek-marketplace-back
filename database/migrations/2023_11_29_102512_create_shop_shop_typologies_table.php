<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shop_shop_typologies', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('shop_id');
            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');

            $table->unsignedBigInteger('shop_typologies_id');
            $table->foreign('shop_typologies_id')->references('id')->on('shop_typologies')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shop_shop_typologies');
    }
};
