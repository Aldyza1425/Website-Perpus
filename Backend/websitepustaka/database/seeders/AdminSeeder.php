<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        Admin::create([
            'nama' => 'Administrator',
            'email' => 'admin@perpustakaan.com',
            'password' => Hash::make('password123'),
            'tanggal_dibuat' => now()->toDateString(),
        ]);

        Admin::create([
            'nama' => 'John Doe',
            'email' => 'john@perpustakaan.com',
            'password' => Hash::make('password123'),
            'tanggal_dibuat' => now()->toDateString(),
        ]);
    }
}
