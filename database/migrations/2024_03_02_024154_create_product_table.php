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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string("product_name")->nullable(true);
            $table->integer("price");
            $table->string("description");
            $table->string("image")->nullable(true);

            $table->unsignedBigInteger("category_id")->nullable();
            $table->foreign("category_id")->references("id")->on("category");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
