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
            'user_id' => 1,
            'product_id' => 1,
            'title' => 'titulo de prueba',
            'comment' => 'Comentario de prueba',
            'created_at' => '2021-01-01 00:00:00',
            'updated_at' => '2021-01-01 00:00:00']);
    }
}
