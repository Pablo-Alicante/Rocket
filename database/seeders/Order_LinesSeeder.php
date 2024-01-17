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
            'id' => 1,
            'uuid' => '1234567890',
            'order_id' => 1,
            'product_id' => 1,
            'product_name' => 'Producto 1',
            'units' => 1,
            'base' => 1,
            'tax_value' => 0.21,
            'total' => 1.21,
            'created_at' => '2021-01-01 00:00:00',
            'updated_at' => '2021-01-01 00:00:00']);
    }
}
