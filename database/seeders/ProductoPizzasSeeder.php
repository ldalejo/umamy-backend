<?php

namespace Database\Seeders;

use Carbon\Carbon;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoPizzasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pizzas = [
            [
                'categoria_id' => 4,
                'nombre' => 'Pizza de aceitunas y salchichón',
                'precio' => 10,
                'imagen' => 'pizzas/pizza_aceitunas_salchichon.jpg',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 4,
                'nombre' => 'Pizza de albahaca y pepperoni',
                'precio' => 10,
                'imagen' => 'pizzas/pizza_albahaca_pepperoni.jpg',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 4,
                'nombre' => 'Pizza de bacon y champiñones',
                'precio' => 11,
                'imagen' => 'pizzas/pizza_bacon_champinones.jpg',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 4,
                'nombre' => 'Pizza de champiñones',
                'precio' => 10,
                'imagen' => 'pizzas/pizza_champinones.jpg',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 4,
                'nombre' => 'Pizza de pepperoni',
                'precio' => 10,
                'imagen' => 'pizzas/pizza_pepperoni.jpg',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 4,
                'nombre' => 'Pizza de pulled pork',
                'precio' => 11,
                'imagen' => 'pizzas/pizza_pulled_pork.jpg',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'categoria_id' => 4,
                'nombre' => 'Pizza de tomates y pimientos',
                'precio' => 10,
                'imagen' => 'pizzas/pizza_tomates_pimientos.jpg',
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
            
        ];
        
        DB::table('productos')->insert($pizzas);
    }
}
