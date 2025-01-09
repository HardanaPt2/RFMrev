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
        Schema::create('mobils', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Nama mobil
            $table->string('color'); // Warna mobil
            $table->integer('seating_capacity'); // Kapasitas tempat duduk
            $table->string('daily_rental_price'); // Harga sewa harian
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobils');
    }
};
