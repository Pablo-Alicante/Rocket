<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('images')->delete();

        DB::table('images')->insert([
            'id' => 1,
            'image' => 'Image 1',
            'product_id' => 1,
            'order' => 1,
            'created_at' => '2021-01-01 00:00:00',
            'updated_at' => '2021-01-01 00:00:00']);
    }
}
