<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('carts')->delete();

        DB::table('carts')->insert([
            'id' => 1,
            'uuid' => '1234567890',
            'active' => true,
            'order_id' => 1,
            'user_id' => 1,
            'coupon_id' => 1,
            'created_at' => '2021-01-01 00:00:00',
            'updated_at' => '2021-01-01 00:00:00']);
    }
}
