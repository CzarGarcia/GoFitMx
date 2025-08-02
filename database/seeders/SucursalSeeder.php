<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Branch;

class SucursalSeeder extends Seeder
{
    public function run(): void
    {
        Branch::create([
            'name' => 'Sucursal Centro',
            'address' => 'Av. Juárez #123, Guadalajara, Jalisco',
            'phone' => '33 1234 5678',
        ]);

        Branch::create([
            'name' => 'Sucursal Chapultepec',
            'address' => 'Calle Morelos #456, Guadalajara, Jalisco',
            'phone' => '33 9876 5432',
        ]);
    }
}
