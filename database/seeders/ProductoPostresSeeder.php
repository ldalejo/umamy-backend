<?php

namespace Database\Seeders;

use Carbon\Carbon;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoPostresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $postres = [
            [
                'categoria_id' => 6,
                'nombre' => 'Tarta de plátano',
                'precio' => 7,
                'imagen' => 'postres/tarta_platano.jpg',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 6,
                'nombre' => 'Tarta de queso',
                'precio' => 7.5,
                'imagen' => 'postres/tarta_queso.jpg',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 6,
                'nombre' => 'Tarta de dos chocolates',
                'precio' => 8,
                'imagen' => 'postres/dos_chocolates.jpg',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 6,
                'nombre' => 'Tarta de frambuesas',
                'precio' => 7,
                'imagen' => 'postres/tarta_frambuesa.jpg',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 6,
                'nombre' => 'Tarta de limón',
                'precio' => 7,
                'imagen' => 'postres/tarta_limon.jpg',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 6,
                'nombre' => 'Surtido de mini tartas',
                'precio' => 10,
                'imagen' => 'postres/surtido.jpg',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 6,
                'nombre' => 'Tarta imperial',
                'precio' => 8,
                'imagen' => 'postres/tarta_imperial.jpg',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 6,
                'nombre' => 'Tarta de vainilla',
                'precio' => 7,
                'imagen' => 'postres/tarta_vainilla.jpg',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 6,
                'nombre' => 'Tarta de vainilla y moras',
                'precio' => 8,
                'imagen' => 'postres/tarta_vainilla_mora.jpg',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];

        DB::table('productos')->insert($postres);
    }
}
