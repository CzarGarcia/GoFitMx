<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Administrador General',
            'email' => 'admin@gimnasio.com',
            'password' => bcrypt('admin123'),
            'role' => 'admin',
            'phone' => '3312345678',
        ]);

        User::create([
            'name' => 'Sandra Morales',
            'email' => 'sandra@gimnasio.com',
            'password' => bcrypt('empleado123'),
            'role' => 'employee',
            'phone' => '3399991122',
        ]);

        User::create([
            'name' => 'Luis Hernández',
            'email' => 'luis@gimnasio.com',
            'password' => bcrypt('cliente123'),
            'role' => 'customer',
            'phone' => '3322233344',
        ]);
    }
}
