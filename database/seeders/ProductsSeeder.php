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
            [
                'uuid' => '1234567890',
                'name' => 'Dado10',
                'description' => 'Dados de 10 caras azul',
                'price' => 1,
                'stock' => 10,
                'available' => true,
                'model_id' => 1,
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',
            ],
            [
                'uuid' => '0987654321',
                'name' => 'Dado10',
                'description' => 'Dado de 20 caras',
                'price' => 1,
                'stock' => 20,
                'available' => true,
                'model_id' => 2,
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00'],
            [
                'uuid' => '3987654321',
                'name' => 'DadoVida',
                'description' => 'Dados que suben la fuerza y vida de las criaturas',
                'price' => 45,
                'stock' => 15,
                'available' => true,
                'model_id' => 3,
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00'],
            [
                'uuid' => '4987654321',
                'name' => 'DadoMuerte',
                'description' => 'Dados que bajan la fuerza y vida de las criaturas',
                'price' => 45,
                'stock' => 15,
                'available' => true,
                'model_id' => 3,
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00'],
            [
                'uuid' => '5987654321',
                'name' => 'Dado10',
                'description' => 'Dados de 10 caras',
                'price' => 45,
                'stock' => 15,
                'available' => true,
                'model_id' => 3,
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00'],

        ]);
    }
}
