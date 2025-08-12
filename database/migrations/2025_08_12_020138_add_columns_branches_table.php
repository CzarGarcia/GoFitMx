<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('branches', function (Blueprint $table) {
            $table->string('description')->nullable()->after('name');
            $table->string('opening_hours')->nullable()->after('description');
            $table->string('closing_hours')->nullable()->after('opening_hours');
            $table->string('images')->nullable()->after('closing_hours');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('branches', function (Blueprint $table) {
            $table->dropColumn(['description', 'opening_hours', 'closing_hours', 'images']);
        });
    }
};
