<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CategoriaSeeder::class);
        $this->call(ProductoBebidaSeeder::class);
        $this->call(ProductoCarnesSeeder::class);
        $this->call(ProductoEntrantesSeeder::class);
        $this->call(ProductoHamburguesasSeeder::class);
        $this->call(ProductoPizzasSeeder::class);
        $this->call(ProductoPostresSeeder::class);
    }
}
