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
            $table->uuid('productID')->primary();
            $table->string('productName')->nullable(false);
            $table->integer('productPrice')->nullable(false);
            $table->enum('productCategory', ['Atasan', 'Bawahan', 'Aksesoris'])->nullable(false);
            $table->text('productDescription')->nullable(false);
            $table->integer('ProductWeight')->nullable(false);
            $table->string('ProductImagePath')->nullable(false);
            $table->enum('ForGender', ['Pria', 'Wanita'])->nullable(false);
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
