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
        Schema::create('admins', function (Blueprint $table) {
            $table->id(); // Menambahkan id sebagai primary key
            $table->string('name'); // Menambahkan kolom name
            $table->string('email')->unique(); // Menambahkan kolom email dengan constraint unik
            $table->string('password'); // Menambahkan kolom password
            $table->string('phone_number'); // Menambahkan kolom nomor telepon
            $table->timestamps(); // Menambahkan kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
