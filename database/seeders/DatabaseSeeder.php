<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Llamamos a otro fichero de semillas
        $this->call(ModelsSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(NewslettersSeeder::class);
        $this->call(CommentsSeeder::class);
        $this->call(CategoriesSeeder::class);

        $this->call(ImagesSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(FavoritesSeeder::class);
        $this->call(CartsSeeder::class);
        $this->call(Cart_LinesSeeder::class);
        $this->call(CouponsSeeder::class);
        $this->call(OrdersSeeder::class);
        $this->call(Order_LinesSeeder::class);

        // Mostramos información por consola
        $this->command->info('User table seeded!');
    }
}
