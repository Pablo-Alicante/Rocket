<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Cart_LinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cart_lines')->delete();

        DB::table('cart_lines')->insert([
            'cart_id' => 1,
            'product_id' => 2,
            'units' => 3,
            'total_base_price' => 10,
            'total_tax' => 10,
            'total_price' => 10,
            'created_at' => '2021-01-01 00:00:00',
            'updated_at' => '2021-01-01 00:00:00']);
    }
}
