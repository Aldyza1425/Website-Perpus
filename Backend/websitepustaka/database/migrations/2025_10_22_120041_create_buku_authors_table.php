<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('buku_authors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_buku')->constrained('bukus', 'id_buku');
            $table->foreignId('id_author')->constrained('authors', 'id_author');
            $table->timestamps();

            $table->unique(['id_buku', 'id_author']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('buku_authors');
    }
};
