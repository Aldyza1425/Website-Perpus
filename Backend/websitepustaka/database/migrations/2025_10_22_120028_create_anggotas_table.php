<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('anggotas', function (Blueprint $table) {
            $table->id('id_anggota');
            $table->string('nama');
            $table->string('NIM')->unique();
            $table->text('alamat');
            $table->string('telepon');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('status_anggota', ['active', 'inactive'])->default('active');
            $table->string('gambar')->nullable();
            $table->datetime('tanggal_daftar');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('anggotas');
    }
};
