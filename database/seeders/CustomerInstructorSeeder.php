<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\CustomerInstructor;
use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerInstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cliente = Customer::first();
        $empleado = Employee::first();

        CustomerInstructor::create([
            'customer_id' => $cliente->id,
            'employee_id' => $empleado->id,
            'assigned_at' => Carbon::now(),
        ]);
    }
}
