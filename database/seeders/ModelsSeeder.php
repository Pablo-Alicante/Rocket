<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('models')->delete();

        DB::table('models')->insert([
            'id' => 1,
            'name' => 'Model 1',
            'code' => '1234567890',
            'description' => 'Description 1',
            'created_at' => '2021-01-01 00:00:00',
            'updated_at' => '2021-01-01 00:00:00']);
    }
}
