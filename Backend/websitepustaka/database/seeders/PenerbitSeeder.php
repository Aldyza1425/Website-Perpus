<?php

namespace Database\Seeders;

use App\Models\Penerbit;
use Illuminate\Database\Seeder;

class PenerbitSeeder extends Seeder
{
    public function run(): void
    {
        $penerbits = [
            ['nama' => 'Gramedia Pustaka Utama'],
            ['nama' => 'Erlangga'],
            ['nama' => 'Mizan Publishing'],
            ['nama' => 'Kompas Gramedia'],
            ['nama' => 'Andi Publisher'],
            ['nama' => 'Informatika'],
            ['nama' => 'Pustaka Al-Kautsar'],
        ];

        foreach ($penerbits as $penerbit) {
            Penerbit::create($penerbit);
        }
    }
}
