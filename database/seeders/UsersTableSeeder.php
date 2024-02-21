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
            [
                'uuid' => '1234567890',
                'role' => 'customer',
                'name' => 'Luisito',
                'surname' => 'Martinez',
                'email' => 'ejemplo@domain.com',
                'email_verified_at' => '2021-01-01 00:00:00',
                'password' => bcrypt('strongpassword'),
                'phone' => '123456789',
                'address' => 'Calle Falsa 123',
                'birthday' => '2021-01-01 00:00:00',
                'active' => 'true',
                'unsubscribe' => 'false',
                'unsubscribe_at' => '2021-01-01 00:00:01',
                'login_at' => '2021-01-01 00:00:01',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',
            ]
        ]);
    }
}
