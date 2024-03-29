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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('code')->index()->nullable();
            $table->integer('brand_id')->index()->nullable();
            $table->integer('specie_id')->index()->nullable();
            $table->integer('category_id')->index()->nullable();
            $table->string('name_ge')->index();
            $table->string('name_en')->index();
            $table->string('description_ge')->nullable();
            $table->string('description_en')->nullable();
            $table->string('image');
            $table->decimal('price', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
