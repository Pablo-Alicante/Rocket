<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->delete();

        DB::table('orders')->insert([
            'id' => 1,
            'uuid' => '1234567890',
            'user_id' => 1,
            'user_name' => 'John',
            'user_surname' => 'Doe',
            'user_email' => 'juan@email.es',
            'user_phone' => '123456789',
            'user_comments' => 'Lorem ipsum dolor sit amet',
            'user_address' => 'calle falsa 123',
            'user_city' => 'Lucentum',
            'user_zipcode' => '12345',
            'user_country' => 'España',
            'cart_id' => 1,
            'coupon_id' => 1,
            'created_at' => '2021-01-01 00:00:00',
            'updated_at' => '2021-01-01 00:00:00']);
    }
}
