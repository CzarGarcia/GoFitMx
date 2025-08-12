<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            SucursalSeeder::class,
            PlanSeeder::class,
            UserSeeder::class,
            EmployeeSeeder::class,
            CustomerSeeder::class, // 👈 esto debe ir antes
            MembershipSeeder::class,
            CustomerInstructorSeeder::class,
            InventarioSeeder::class,
            PaymentSeeder::class,
            PageSeed::class,
        ]);
    }
}
