<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Inventory;
use App\Models\Branch;
use App\Enums\StatusInventory;

class InventarioSeeder extends Seeder
{
    public function run(): void
    {
        $sucursal = Branch::first();

        Inventory::create([
            'name' => 'Caminadora eléctrica',
            'description' => 'Ideal para cardio. Incluye pantalla táctil.',
            'status' => StatusInventory::ACTIVO->value,
            'maintenance_date' => now()->addMonths(1),
            'branch_id' => $sucursal->id,
        ]);

        Inventory::create([
            'name' => 'Bicicleta fija',
            'description' => 'Bicicleta estática con resistencia ajustable.',
            'status' => StatusInventory::EN_MANTENIMIENTO->value,
            'maintenance_date' => now()->addWeeks(2),
            'branch_id' => $sucursal->id,
        ]);

        Inventory::create([
            'name' => 'Máquina de pesas',
            'description' => 'Sistema multifuncional para fuerza.',
            'status' => StatusInventory::INACTIVO->value,
            'maintenance_date' => null,
            'branch_id' => $sucursal->id,
        ]);
    }
}
