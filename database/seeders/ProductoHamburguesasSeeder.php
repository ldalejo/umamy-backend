<?php

namespace Database\Seeders;

use Carbon\Carbon;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoHamburguesasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hamburguesas = [
            [
                'categoria_id' => 3,
                'nombre' => 'Hamburguesa doble',
                'precio' => 10,
                'imagen' => 'hamburguesas/hamburguesa_doble.jpg',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 3,
                'nombre' => 'Hamburguesa de pollo a la plancha',
                'precio' => 7.5,
                'imagen' => 'hamburguesas/hamburguesa_pollo_plancha.jpg',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 3,
                'nombre' => 'Hamburguesa de pollo frito',
                'precio' => 8.5,
                'imagen' => 'hamburguesas/hamburguesa_pollo.jpg',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 3,
                'nombre' => 'Hamburguesa simple',
                'precio' => 7,
                'imagen' => 'hamburguesas/hamburguesa_simple.jpg',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 3,
                'nombre' => 'Super hamburguesa',
                'precio' => 14.5,
                'imagen' => 'hamburguesas/super_hamburguesa.jpg',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];

        DB::table('productos')->insert($hamburguesas);
    }
}
