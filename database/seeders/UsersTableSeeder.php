<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        // Borramos los datos de la tabla
        DB::table('users')->delete();

        // Añadimos una entrada a esta tabla
        DB::table('users')->insert([
            'id' => 1,
            'uuid' => '1234567890',
            'role' => 'customer',
            'name' => 'Perico',
            'surname' => 'Perez',
            'email' => 'ejemplo@domain.com',
            'email_verified_at' => '2021-01-01 00:00:00',
            'phone' => '123456789',
            'address' => 'Calle Falsa 123',
            'birthday' => '2021-01-01 00:00:00',
            'created_at' => '2021-01-01 00:00:00',
            'updated_at' => '2021-01-01 00:00:00',
            'password' => 'strongpassword',
        ]);
    }
}
