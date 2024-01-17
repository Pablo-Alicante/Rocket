<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    public function run(): void
    {
        // Borramos los datos de la tabla
        DB::table('products')->delete();

        // Añadimos una entrada a esta tabla
        DB::table('products')->insert([
            'id' => 1,
            'uuid' => '1234567890',
            'category_id' => 1,
            'name' => 'Perico',
            'description' => 'Perez',
            'model_id' => 1,
            'price' => 10,
            'stock' => 10,
            'avalaible' => true,
            'image_id' => 1,
            'created_at' => '2021-01-01 00:00:00',
            'updated_at' => '2021-01-01 00:00:00']);
    }
}
