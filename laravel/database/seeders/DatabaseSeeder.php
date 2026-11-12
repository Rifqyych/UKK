<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create(['name' => 'AbangAdmin', 'email' => 'admin@perpus.test', 'password' => 'admin', 'role' => 'admin']);
        User::create(['name' => 'Rifqy', 'email' => 'siswa@perpus.test', 'password' => 'siswa', 'role' => 'siswa', 'kelas' => 'XII RPL 2']);

        Book::create(['title' => 'Buku Telkom', 'author' => 'Sir Fakih', 'publisher' => 'Telkom', 'year' => 2006, 'stock' => 5]);
        Book::create(['title' => 'Buku Fityan', 'author' => 'Sir Takbir', 'publisher' => 'Fityan', 'year' => 2007, 'stock' => 3]);
        Book::create(['title' => 'Buku Citra', 'author' => 'Sir Citra', 'publisher' => 'Citra', 'year' => 2009, 'stock' => 7]);
    }
}