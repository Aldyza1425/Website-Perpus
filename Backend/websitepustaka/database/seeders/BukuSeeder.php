<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    public function run(): void
    {
        $bukus = [
            [
                'id_penerbit' => 1,
                'id_kategori' => 3,
                'judul' => 'Laskar Pelangi',
                'stock' => 10,
                'tahun_terbit' => 2005,
                'isbn' => '9789793062792',
                'gambar' => null,
            ],
            [
                'id_penerbit' => 2,
                'id_kategori' => 7,
                'judul' => 'Pemrograman PHP untuk Pemula',
                'stock' => 5,
                'tahun_terbit' => 2020,
                'isbn' => '9786026234567',
                'gambar' => null,
            ],
            [
                'id_penerbit' => 3,
                'id_kategori' => 4,
                'judul' => 'Ayat-Ayat Cinta',
                'stock' => 8,
                'tahun_terbit' => 2004,
                'isbn' => '9789793723576',
                'gambar' => null,
            ],
            [
                'id_penerbit' => 4,
                'id_kategori' => 5,
                'judul' => 'Sejarah Indonesia Modern',
                'stock' => 3,
                'tahun_terbit' => 2010,
                'isbn' => '9789797095432',
                'gambar' => null,
            ],
            [
                'id_penerbit' => 5,
                'id_kategori' => 2,
                'judul' => 'Fisika Dasar',
                'stock' => 7,
                'tahun_terbit' => 2018,
                'isbn' => '9789792956789',
                'gambar' => null,
            ],
        ];

        foreach ($bukus as $buku) {
            Buku::create($buku);
        }
    }
}
