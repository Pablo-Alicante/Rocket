<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menu')->delete();

        DB::table('menu')->insert([
            'uuid' => '1234567890',
            'name' => 'Inicio',
            'url' => '/',
            'code' => 'home',
            'category_id' => 1,
            'created_at' => '2021-01-01 00:00:00',
            'updated_at' => '2021-01-01 00:00:00',
        ]);
    }
}
