<?php

namespace Database\Seeders;

use Carbon\Carbon;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoEntrantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $entrantes = [
            [
                'categoria_id' => 2,
                'nombre' => 'Alitas de pollo',
                'precio' => 10,
                'imagen' => 'entrantes/alitas_pollo.jpg',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 2,
                'nombre' => 'Croquetas',
                'precio' => 8,
                'imagen' => 'entrantes/croquetas.jpg',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 2,
                'nombre' => 'Ensalada de la casa',
                'precio' => 6,
                'imagen' => 'entrantes/ensalada_casa.jpg',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 2,
                'nombre' => 'Ensalada César',
                'precio' => 8,
                'imagen' => 'entrantes/ensalada_cesar.jpg',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 2,
                'nombre' => 'Ensalada de marisco',
                'precio' => 8,
                'imagen' => 'entrantes/ensalada_marisco.jpg',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 2,
                'nombre' => 'Ensalada de tomates',
                'precio' => 5,
                'imagen' => 'entrantes/ensalada_tomates.jpg',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 2,
                'nombre' => 'Pescaito frito',
                'precio' => 15,
                'imagen' => 'entrantes/fish_and_chips.jpg',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 2,
                'nombre' => 'Nachos con queso',
                'precio' => 7,
                'imagen' => 'entrantes/nachos_queso.jpg',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 2,
                'nombre' => 'Patatas asadas',
                'precio' => 6,
                'imagen' => 'entrantes/patatas_asadas.jpg',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 2,
                'nombre' => 'Provolone',
                'precio' => 7,
                'imagen' => 'entrantes/provolone.jpg',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];

        DB::table('productos')->insert($entrantes);
    }
}
