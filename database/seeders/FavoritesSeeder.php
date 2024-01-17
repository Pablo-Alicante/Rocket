<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FavoritesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('favorites')->delete();

        DB::table('favorites')->insert([
            'id' => 1,
            'user_id' => 1,
            'product_id' => 1,
            'created_at' => '2021-01-01 00:00:00',
            'updated_at' => '2021-01-01 00:00:00']);
    }
}
