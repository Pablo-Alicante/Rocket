<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('models')->delete();

        DB::table('models')->insert([
            [
                'name' => 'Dado10',
                'code' => '1234567890',
                'description' => 'Dado de diez caras',
                'image' => 'image1.jpg',
                'category_id' => 1,
                'url' => 'dado10',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',
            ],
            [
                'name' => 'Dado20',
                'code' => '2234567890',
                'description' => 'Dado de veinte caras',
                'image' => 'image2.jpg',
                'category_id' => 1,
                'url' => 'dado20',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',
            ],
            [
                'name' => 'DadoSuma',
                'code' => '3334567890',
                'description' => 'Dado de seis caras que suma la vida y resistencia',
                'image' => 'image2.jpg',
                'category_id' => 1,
                'url' => 'dado-suma',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',
            ],
            [
                'name' => 'DadoResta',
                'code' => '6234567890',
                'description' => 'Dado de seis caras que resta la vida y resistencia',
                'image' => 'image2.jpg',
                'category_id' => 1,
                'url' => 'dado-resta',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',
            ],

            [
                'name' => 'intrafundas transparentes',
                'code' => '3234567890',
                'description' => 'Fundas transparentes para ir dentro de otras fundas',
                'image' => 'image3.jpg',
                'category_id' => 2,
                'url' => 'intrafundas-transparentes',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',
            ],
            [
                'name' => 'Fundas transparentes',
                'code' => '4234567890',
                'description' => 'Fundas transparentes para cartas',
                'image' => 'image4.jpg',
                'category_id' => 2,
                'url' => 'fundas-transparentes',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',
            ],
            [
                'name' => 'Fundas opacas',
                'code' => '5234567890',
                'description' => 'Fundas opacas por un lado y transparentes por el otro',
                'image' => 'image5.jpg',
                'category_id' => 2,
                'url' => 'fundas-opacas',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',
            ],
            [
                'name' => 'Hojas para archivadores',
                'code' => '2234567890',
                'description' => 'Hojas de 9 bolsillos para guardar tus cartas en archivadores',
                'image' => 'image2.jpg',
                'category_id' => 3,
                'url' => 'hojas-archivadores',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',
            ],
            [
                'name' => 'Archivadores para hojas de 9 bolsillos',
                'code' => '2234567890',
                'description' => 'Archivador para hojas de 9 bolsillos archivadores',
                'image' => 'image2.jpg',
                'category_id' => 4,
                'url' => 'archivadores-hojas-9-bolsillos',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',
            ],
            [
                'name' => 'Archivadores de 4 bolsillos',
                'code' => '2234567890',
                'description' => 'Archivadores de 4 bolsillos',
                'image' => 'image2.jpg',
                'category_id' => 4,
                'url' => 'archivadores-4-bolsillos',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',
            ],
            [
                'name' => 'Cajas 80 cartas',
                'code' => '2234567890',
                'description' => 'Cajas para guardar tus mazos de cartas',
                'image' => 'image2.jpg',
                'category_id' => 5,
                'url' => 'cajas-80-cartas',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',
            ],
            [
                'name' => 'Cajas 120 cartas',
                'code' => '2234567890',
                'description' => 'Cajas para guardar tus mazos de Commander',
                'image' => 'image2.jpg',
                'category_id' => 5,
                'url' => 'cajas-120-cartas',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',
            ],
            [
                'name' => 'Tapetes',
                'code' => '8634567890',
                'description' => 'Tapetes para no rallar tus cartas y fundas.',
                'image' => 'image2.jpg',
                'category_id' => 6,
                'url' => 'tapetes',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',
            ],
            [
                'name' => 'Contadores genéricos',
                'code' => '8634567890',
                'description' => 'Fichas normales',
                'image' => 'image2.jpg',
                'category_id' => 7,
                'url' => 'contadores-genericos',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',
            ],
            [
                'name' => 'Contadores de habilidad',
                'code' => '8634567890',
                'description' => 'Fichas para marcar el veneno, volar, dañar primero, etc.',
                'image' => 'image2.jpg',
                'category_id' => 7,
                'url' => 'contadores-habilidad',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',
            ],
            [
                'name' => 'Cajas de sobres',
                'code' => '8834567890',
                'description' => 'Cajas de sobres completas de Magic: The Gathering',
                'image' => 'image2.jpg',
                'category_id' => 8,
                'url' => 'cajas-sobres',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',
            ],
            [
                'name' => 'Sobres sueltos',
                'code' => '9994567890',
                'description' => 'Sobres sueltos de expansiones de cartas de Magic: The Gathering',
                'image' => 'image2.jpg',
                'category_id' => 8,
                'url' => 'sobres-sueltos',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',
            ],

        ]);
    }
}
