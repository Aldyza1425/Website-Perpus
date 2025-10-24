<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        $authors = [
            ['nama' => 'Andrea Hirata'],
            ['nama' => 'Tere Liye'],
            ['nama' => 'Habiburrahman El Shirazy'],
            ['nama' => 'Dee Lestari'],
            ['nama' => 'Raditya Dika'],
            ['nama' => 'J.K. Rowling'],
            ['nama' => 'George Orwell'],
            ['nama' => 'William Shakespeare'],
            ['nama' => 'Pramoedya Ananta Toer'],
            ['nama' => 'Ahmad Fuadi'],
        ];

        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}
