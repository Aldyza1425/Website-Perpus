<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->id('id_buku');
            $table->foreignId('id_penerbit')->constrained('penerbits', 'id_penerbit');
            $table->foreignId('id_kategori')->constrained('kategoris', 'id_kategori');
            $table->string('judul');
            $table->integer('stock');
            $table->integer('tahun_terbit');
            $table->string('isbn')->unique();
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};