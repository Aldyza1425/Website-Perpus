<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $kategoris = [
            ['nama_kategori' => 'Teknologi'],
            ['nama_kategori' => 'Sains'],
            ['nama_kategori' => 'Fiksi'],
            ['nama_kategori' => 'Non-Fiksi'],
            ['nama_kategori' => 'Sejarah'],
            ['nama_kategori' => 'Biografi'],
            ['nama_kategori' => 'Pemrograman'],
            ['nama_kategori' => 'Bisnis'],
            ['nama_kategori' => 'Seni'],
            ['nama_kategori' => 'Pendidikan'],
        ];

        foreach ($kategoris as $kategori) {
            Kategori::create($kategori);
        }
    }
}
