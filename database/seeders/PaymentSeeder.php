<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Membership;
use App\Models\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cliente = Customer::first();
        $membresia = Membership::first();

        Payment::create([
            'customer_id' => $cliente->id,
            'membership_id' => $membresia->id,
            'amount' => 399.00,
            'method' => 'card',
            'payment_date' => now(),
        ]);

        Payment::create([
            'customer_id' => $cliente->id,
            'membership_id' => $membresia->id,
            'amount' => 399.00,
            'method' => 'cash',
            'payment_date' => now()->subMonths(1),
        ]);
    }
}
