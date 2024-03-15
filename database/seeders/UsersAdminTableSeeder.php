<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersAdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Borramos los datos de la tabla
        DB::table('users_admin')->delete();

        // Añadimos una entrada a esta tabla
        DB::table('users_admin')->insert([

            [
                'name' => 'Luisito',
                'email' => 'ejemplo@domain.com',
                'email_verified_at' => '2021-01-01 00:00:00',
                'password' => bcrypt('strongpassword'),
                'login_at' => '2021-01-01 00:00:01',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',
            ]
        ]);
    }
}
