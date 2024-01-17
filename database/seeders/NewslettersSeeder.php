<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewslettersSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('newsletters')->delete();

        DB::table('newsletters')->insert([
            'id' => 1,
            'email' => 'correofalso@email.com',
            'is_active' => true,
            'user_id' => 1,
            'created_at' => '2021-01-01 00:00:00',
            'updated_at' => '2021-01-01 00:00:00',
        ]);
    }
}
