<?php

namespace Database\Seeders;

use Carbon\Carbon;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoCarnesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carnes = [
            [
                'categoria_id' => 5,
                'nombre' => 'Costillas a la Bbq',
                'precio' => 15,
                'imagen' => 'carnes/costillar_bbq.jpg',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 5,
                'nombre' => 'Entrecot de ternera',
                'precio' => 20,
                'imagen' => 'carnes/entrecot_ternera.jpg',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 5,
                'nombre' => 'Parrillada',
                'precio' => 25,
                'imagen' => 'carnes/parrillada.jpg',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 5,
                'nombre' => 'Pollo a la parrilla',
                'precio' => 12.5,
                'imagen' => 'carnes/pollo_asado.jpg',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 5,
                'nombre' => 'Salchichas a la parrilla',
                'precio' => 10,
                'imagen' => 'carnes/salchichas_parrilla.jpg',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 5,
                'nombre' => 'Solomillo de ternera',
                'precio' => 24.5,
                'imagen' => 'carnes/solomillo_ternera.jpg',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        DB::table('productos')->insert($carnes);
    }
}
