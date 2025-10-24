<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            PenerbitSeeder::class,
            KategoriSeeder::class,
            AuthorSeeder::class,
            AnggotaSeeder::class,
            BukuSeeder::class,
            BukuAuthorSeeder::class,
            PeminjamanSeeder::class,
        ]);
    }
}
