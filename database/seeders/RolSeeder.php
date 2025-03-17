<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'id' => 1, 
                'nombre' => 'admin'
            ],
            [
                'id' => 2, 
                'nombre' => 'cliente'
            ]
        ];

        DB::table('roles')->insert($roles);
    }
}
