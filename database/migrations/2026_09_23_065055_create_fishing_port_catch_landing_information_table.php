<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('fishing_port_catch_landing_information', function (Blueprint $table) {
            $table->id();
            $table->foreignId('landing_id')->constrained('landings')->cascadeOnDelete();
            $table->foreignId('fish_species_id')->constrained('fish_species')->cascadeOnDelete();
            $table->foreignId('auction_id')->constrained('auctions')->cascadeOnDelete();
            $table->foreignId('port_inspector_id')->constrained('port_inspectors')->cascadeOnDelete();

            $table->string('fish_grade');
            $table->decimal('total_weight_kg', 10, 2);
            $table->decimal('storage_temperature_celsius', 5, 2);

            $table->enum('inspection_status', [
                'pending',
                'passed',
                'failed',
            ])->default('pending');

            $table->enum('settlement_status', [
                'pending',
                'settled',
            ])->default('pending');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(
            'fishing_port_catch_landing_information'
        );
    }
};