<?php

namespace Database\Seeders;

use App\Models\Branch;
use App\Models\Customer;
use App\Models\Membership;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuario = User::where('role', 'customer')->first();
        $sucursal = Branch::first();
        $membresia = Membership::first();

        Customer::create([
            'user_id' => $usuario->id,
            'branch_id' => $sucursal->id,
            // 'membership_id' => $membresia->id,
        ]);
    }
}
