<?php

namespace Database\Seeders;

use App\Models\BukuAuthor;
use Illuminate\Database\Seeder;

class BukuAuthorSeeder extends Seeder
{
    public function run(): void
    {
        $bukuAuthors = [
            ['id_buku' => 1, 'id_author' => 1], // Laskar Pelangi - Andrea Hirata
            ['id_buku' => 2, 'id_author' => 6], // Pemrograman PHP - J.K. Rowling
            ['id_buku' => 3, 'id_author' => 3], // Ayat-Ayat Cinta - Habiburrahman El Shirazy
            ['id_buku' => 4, 'id_author' => 9], // Sejarah Indonesia - Pramoedya
            ['id_buku' => 5, 'id_author' => 7], // Fisika Dasar - George Orwell
            ['id_buku' => 1, 'id_author' => 2], // Laskar Pelangi juga oleh Tere Liye (contoh multiple authors)
        ];

        foreach ($bukuAuthors as $bukuAuthor) {
            BukuAuthor::create($bukuAuthor);
        }
    }
}
