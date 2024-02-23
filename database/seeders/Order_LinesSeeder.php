<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Order_LinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('order_lines')->delete();

        DB::table('order_lines')->insert([
            'order_id' => 1,
            'product_id' => 1,
            'units' => 1,
            'price_base' => 1,
            'price_tax' => 0.21,
            'price_total' => 1.21,
            'created_at' => '2021-01-01 00:00:00',
            'updated_at' => '2021-01-01 00:00:00']);
    }
}
