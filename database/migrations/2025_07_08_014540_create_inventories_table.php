<?php

use App\Enums\StatusInventory;
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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->text('description')->nullable();
            $table->bigInteger('branch_id')->unsigned()->nullable();
            $table->enum('status', array_map(fn($case) => $case->value, StatusInventory::cases()))
                ->default(StatusInventory::ACTIVO->value);
            $table->date('maintenance_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
