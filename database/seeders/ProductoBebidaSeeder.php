<?php

namespace Database\Seeders;

use Carbon\Carbon;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoBebidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bebidas = [
            [
                'categoria_id' => 1, // Bebidas
                'nombre' => 'Agua mineral',
                'precio' => 1.5,
                'imagen' => 'bebidas/agua.png',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 1,
                'nombre' => 'Aguila sin filtrar',
                'precio' => 3.5,
                'imagen' => 'bebidas/aguilasinfiltrar.png',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 1,
                'nombre' => 'Cruzacampo',
                'precio' => 2.5,
                'imagen' => 'bebidas/cruzcampo.png',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 1,
                'nombre' => 'Cruzcampo 00',
                'precio' => 2.5,
                'imagen' => 'bebidas/cruzcampo00.png',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 1,
                'nombre' => 'Radler',
                'precio' => 2.5,
                'imagen' => 'bebidas/cruzcamporadler.png',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 1,
                'nombre' => 'Heineken',
                'precio' => 3,
                'imagen' => 'bebidas/heineken.png',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 1,
                'nombre' => 'Heineken',
                'precio' => 3,
                'imagen' => 'bebidas/heineken00.png',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 1,
                'nombre' => 'Kas Limón',
                'precio' => 2,
                'imagen' => 'bebidas/kaslimon.png',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 1,
                'nombre' => 'Pepsi Zero Zero',
                'precio' => 2,
                'imagen' => 'bebidas/pepsizerozero.png',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 1,
                'nombre' => 'Redbull',
                'precio' => 3,
                'imagen' => 'bebidas/redbull.png',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 1,
                'nombre' => 'Seven Up',
                'precio' => 2,
                'imagen' => 'bebidas/sevenup.png',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        DB::table('productos')->insert($bebidas);
    }
}
