<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class LibrariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('libraries')->insert([
            ['title' => 'Alas de sangre', 'author' => 'Rebecca Yarros', 'genre' => 'Alta fantasia', 'description' => 'Dragones', 'isbn' => '1111'],
            ['title' => 'Divergente', 'author' => 'Veronica Roth', 'genre' => 'Novela juvenil', 'description' => 'Facciones', 'isbn' => '1112'],
        ]);
    }
}
