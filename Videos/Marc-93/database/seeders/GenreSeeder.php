<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    public function run()
    {
        Genre::create(['nama' => 'Komedi']);
        Genre::create(['nama' => 'Drama']);
        Genre::create(['nama' => 'Horor']);
        Genre::create(['nama' => 'action']);
        Genre::create(['nama' => 'Pengetahuan']);
    }
}