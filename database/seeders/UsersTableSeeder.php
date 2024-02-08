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
                'name' => 'Perico',
                'surname' => 'Perez',
                'email' => 'ejemplo@domain.com',
                'email_verified_at' => '2021-01-01 00:00:00',
                'password' => 'strongpassword',
                'phone' => '123456789',
                'address' => 'Calle Falsa 123',
                'birthday' => '2021-01-01 00:00:00',
                'active' => 'true',
                'unsubscribe' => 'false',
                'unsubscribe_at' => '2021-01-01 00:00:01',
                'login_at' => '2021-01-01 00:00:01',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',
            ],
            [
                'uuid' => '2345678901',
                'role' => 'customer',
                'name' => 'Juan',
                'surname' => 'Garcia',
                'email' => 'juan@domain.com',
                'email_verified_at' => '2021-01-01 00:00:00',
                'password' => 'contrasenya',
                'phone' => '234567890',
                'address' => 'Calle Fake 456',
                'birthday' => '2021-01-01 00:00:00',
                'active' => 'false',
                'unsubscribe' => 'true',
                'unsubscribe_at' => '2021-01-02 00:00:00',
                'login_at' => '2021-01-01 00:00:00',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00', ],
            [
                'uuid' => '3456789012',
                'role' => 'admin',
                'name' => 'Pablo',
                'surname' => 'Escolano',
                'email' => 'pablo@domain.com',
                'email_verified_at' => '2021-01-01 00:00:00',
                'password' => 'admin',
                'phone' => '3456789012',
                'address' => 'Calle Mayor 789',
                'birthday' => '2021-01-01 00:00:00',
                'active' => 'true',
                'unsubscribe' => 'false',
                'unsubscribe_at' => '2021-01-01 00:00:01',
                'login_at' => '2021-01-01 00:00:00',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00', ],
        ]);
    }
}
