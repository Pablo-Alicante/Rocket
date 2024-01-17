<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('comments')->delete();

        DB::table('comments')->insert([
            'id' => 1,
            'user_id' => 1,
            'comment' => 'Comentario de prueba',
            'created_at' => '2021-01-01 00:00:00',
            'updated_at' => '2021-01-01 00:00:00']);
    }
}
