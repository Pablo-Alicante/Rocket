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
            'user_id' => 1,
            'user_comments' => 'Lorem ipsum dolor sit amet',
            'status' => 'pendiente',
            'cart_id' => 1,
            'coupon_id' => 1,
            'created_at' => '2021-01-01 00:00:00',
            'updated_at' => '2021-01-01 00:00:00']);
    }
}
