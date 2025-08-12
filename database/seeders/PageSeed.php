<?php

namespace Database\Seeders;

use App\Models\page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/**
 * Class PageSeed
 * command: php artisan db:seed --class=PageSeed
 * Seeder for the pages table.
 */
class PageSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        page::create([
            'name' => 'GoFitMx',
            'icon' => 'fas fa-dumbbell',
            'color_primary' => '#22d3ee',
            'color_secondary' => '#0ea5e9',
            'color_tertiary' => '#6366f1',
            'background_color' => '#111827',
            'background_secondary_color' => '#1f2937',
            'header_color' => '#1e293b',
            'footer_color' => '#0f172a',
            'text_color' => '#f8fafc',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
