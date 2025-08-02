<?php

namespace Database\Seeders;

use App\Models\Branch;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuario = User::where('role', 'employee')->first();
        $sucursal = Branch::first();

        Employee::create([
            'user_id' => $usuario->id,
            'position' => 'Instructor de sala',
            'branch_id' => $sucursal->id,
        ]);
    }
}
