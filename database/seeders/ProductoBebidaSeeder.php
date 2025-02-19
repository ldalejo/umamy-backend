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
                'imagen' => 'storage/bebidas/agua.png',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 1,
                'nombre' => 'Aguila sin filtrar',
                'precio' => 3.5,
                'imagen' => 'storage/bebidas/aguilasinfiltrar.png',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 1,
                'nombre' => 'Cruzacampo',
                'precio' => 2.5,
                'imagen' => 'storage/bebidas/cruzcampo.png',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 1,
                'nombre' => 'Cruzcampo 00',
                'precio' => 2.5,
                'imagen' => 'storage/bebidas/cruzcampo00.png',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 1,
                'nombre' => 'Radler',
                'precio' => 2.5,
                'imagen' => 'storage/bebidas/cruzcamporadler.png',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 1,
                'nombre' => 'Heineken',
                'precio' => 3,
                'imagen' => 'storage/bebidas/heineken.png',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 1,
                'nombre' => 'Heineken',
                'precio' => 3,
                'imagen' => 'storage/bebidas/heineken00.png',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 1,
                'nombre' => 'Kas Limón',
                'precio' => 2,
                'imagen' => 'storage/bebidas/kaslimon.png',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 1,
                'nombre' => 'Kas Naranja',
                'precio' => 2,
                'imagen' => 'storage/bebidas/kasnaranja.png',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 1,
                'nombre' => 'Pepsi',
                'precio' => 2,
                'imagen' => 'storage/bebidas/cruzcamporadler.png',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 1,
                'nombre' => 'Pepsi Zero',
                'precio' => 2,
                'imagen' => 'storage/bebidas/pepsizero.png',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 1,
                'nombre' => 'Pepsi Zero Zero',
                'precio' => 2,
                'imagen' => 'storage/bebidas/pepsizerozero.png',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 1,
                'nombre' => 'Redbull',
                'precio' => 3,
                'imagen' => 'storage/bebidas/redbull.png',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 1,
                'nombre' => 'Seven Up',
                'precio' => 2,
                'imagen' => 'storage/bebidas/sevenup.png',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        DB::table('productos')->insert($bebidas);
    }
}
