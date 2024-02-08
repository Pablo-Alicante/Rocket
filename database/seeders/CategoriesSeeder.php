<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->delete();

        DB::table('categories')->insert([
            [
                'name' => 'Dados',
                'description' => 'Dados',
                'url' => 'dados',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',
            ],
            [
                'name' => 'Fundas',
                'description' => 'Fundas para cartas',
                'url' => 'fundas',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',
            ],
            [
                'name' => 'Hojas para archivadores',
                'description' => 'Hojas para archivadores',
                'url' => 'hojas-archivadores',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',
            ],
            [
                'name' => 'Archivadores',
                'description' => 'Archivadores',
                'url' => 'archivadores',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',
            ],
            [
                'name' => 'Cajas para barajas',
                'description' => 'Cajas para barajas',
                'url' => 'cajas-barajas',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',
            ],
            [
                'name' => 'Tapetes',
                'description' => 'Tapetes para jugar',
                'url' => 'tapetes',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',
            ],
            [
                'name' => 'Contadores',
                'description' => 'Contadores de vida, veneno, habilidades, etc.',
                'url' => 'contadores',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',
            ],
            [
                'name' => 'Expansiones',
                'description' => 'Cajas de sobres y sobres sueltos de expansiones de cartas de Magic: The Gathering',
                'url' => 'expansiones',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',
            ],

        ]);
    }
}
