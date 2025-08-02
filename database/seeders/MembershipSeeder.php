<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Membership;
use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MembershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cliente = Customer::first();
        $plan = Plan::first();

        Membership::create([
            'customer_id' => $cliente->id,
            'plan_id' => $plan->id,
            'start_date' => now()->subDays(10),
            'end_date' => now()->addDays(20),
            'status' => 'active',
        ]);
    }
}
