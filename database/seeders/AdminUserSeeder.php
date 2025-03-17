<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin
        $admin = [
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin1234!'),
            'rol_id' => 1
        ];

        DB::table('users')->insert($admin);
    }
}
