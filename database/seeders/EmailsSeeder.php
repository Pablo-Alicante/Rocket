<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmailsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('emails')->delete();

        DB::table('emails')->insert([
            'from' => 'Pablo',
            'to' => 'Javi',
            'subject' => 'Hola',
            'body' => 'Hola Javi, ¿qué tal?',
            'created_at' => '2021-01-01 00:00:00',
            'updated_at' => '2021-01-01 00:00:00',
        ]);
    }
}
