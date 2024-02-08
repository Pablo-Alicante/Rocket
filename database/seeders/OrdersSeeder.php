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
            'uuid' => '1234567890',
            'user_id' => 1,
            'user_comments' => 'Lorem ipsum dolor sit amet',
            'cart_id' => 1,
            'coupon_id' => 1,
            'created_at' => '2021-01-01 00:00:00',
            'updated_at' => '2021-01-01 00:00:00']);
    }
}
