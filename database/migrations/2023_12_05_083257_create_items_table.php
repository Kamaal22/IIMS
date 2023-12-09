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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('model', 100);
            $table->string('brand', 100);
            $table->unsignedBigInteger('category');
            $table->enum('type', ['unit', 'bulk'])->default('unit');
            $table->string('serial_number', 100)->nullable();
            $table->string('sku', 100)->nullable();
            $table->string('description', 100);
            $table->string('price', 100);
            $table->string('quantity', 100);
            $table->enum('status', ['0', '1', '2', '3', '4'])->default('0');
            $table->string('location', 100)->nullable();
            $table->longText("additional_info")->nullable();
            $table->timestamps();
            $table->foreign('category')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};