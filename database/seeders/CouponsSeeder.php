<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CouponsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('coupons')->delete();

        DB::table('coupons')->insert([
            'active' => true,
            'init_at' => '2021-01-01 00:00:00',
            'end_at' => '2021-01-01 00:00:00',
            'code' => '12890',
            'created_at' => '2021-01-01 00:00:00',
            'updated_at' => '2021-01-01 00:00:00']);

    }
}
