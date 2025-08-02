<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlanSeeder extends Seeder
{
    public function run(): void
    {
        Plan::create([
            'name' => 'Plan Básico',
            'description' => 'Acceso general sin clases adicionales',
            'price' => 399.00,
            'duration_days' => 30,
            'benefits' => json_encode([
                'Acceso a todas las áreas comunes del gimnasio',
                'Sin clases adicionales',
            ]),
        ]);

        Plan::create([
            'name' => 'Plan Premium',
            'description' => 'Acceso total + asesorías y descuentos',
            'price' => 699.00,
            'duration_days' => 30,
            'benefits' => json_encode([
                'Acceso completo a todas las áreas',
                'Asesorías personalizadas',
                'Promociones y descuentos exclusivos',
            ]),
        ]);
    }
}
