<?php

namespace Database\Seeders;

use App\Models\Peminjaman;
use Illuminate\Database\Seeder;

class PeminjamanSeeder extends Seeder
{
    public function run(): void
    {
        $peminjamans = [
            [
                'id_buku' => 1,
                'id_anggota' => 1,
                'tanggal_pinjam' => now()->subDays(5),
                'tanggal_kembali' => now()->addDays(7),
                'tanggal_dikembalikan' => null,
                'status' => 'dipinjam',
            ],
            [
                'id_buku' => 2,
                'id_anggota' => 2,
                'tanggal_pinjam' => now()->subDays(2),
                'tanggal_kembali' => now()->addDays(5),
                'tanggal_dikembalikan' => null,
                'status' => 'dipinjam',
            ],
            [
                'id_buku' => 3,
                'id_anggota' => 3,
                'tanggal_pinjam' => now()->subDays(10),
                'tanggal_kembali' => now()->subDays(3),
                'tanggal_dikembalikan' => now()->subDays(2),
                'status' => 'dikembalikan',
            ],
            [
                'id_buku' => 4,
                'id_anggota' => 1,
                'tanggal_pinjam' => now()->subDays(15),
                'tanggal_kembali' => now()->subDays(8),
                'tanggal_dikembalikan' => null,
                'status' => 'terlambat',
            ],
        ];

        foreach ($peminjamans as $peminjaman) {
            Peminjaman::create($peminjaman);
        }
    }
}
