<?php

namespace Database\Seeders;

use App\Models\Anggota;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AnggotaSeeder extends Seeder
{
    public function run(): void
    {
        $anggotas = [
            [
                'nama' => 'Ahmad Rizki',
                'NIM' => '20210001',
                'alamat' => 'Jl. Merdeka No. 123, Jakarta',
                'telepon' => '081234567890',
                'email' => 'ahmad@student.com',
                'password' => Hash::make('password123'),
                'status_anggota' => 'active',
                'gambar' => null,
                'tanggal_daftar' => now(),
            ],
            [
                'nama' => 'Siti Aminah',
                'NIM' => '20210002',
                'alamat' => 'Jl. Sudirman No. 45, Bandung',
                'telepon' => '081234567891',
                'email' => 'siti@student.com',
                'password' => Hash::make('password123'),
                'status_anggota' => 'active',
                'gambar' => null,
                'tanggal_daftar' => now(),
            ],
            [
                'nama' => 'Budi Santoso',
                'NIM' => '20210003',
                'alamat' => 'Jl. Thamrin No. 67, Surabaya',
                'telepon' => '081234567892',
                'email' => 'budi@student.com',
                'password' => Hash::make('password123'),
                'status_anggota' => 'active',
                'gambar' => null,
                'tanggal_daftar' => now(),
            ],
            [
                'nama' => 'Maya Sari',
                'NIM' => '20210004',
                'alamat' => 'Jl. Gajah Mada No. 89, Yogyakarta',
                'telepon' => '081234567893',
                'email' => 'maya@student.com',
                'password' => Hash::make('password123'),
                'status_anggota' => 'inactive',
                'gambar' => null,
                'tanggal_daftar' => now()->subMonths(3),
            ],
        ];

        foreach ($anggotas as $anggota) {
            Anggota::create($anggota);
        }
    }
}
