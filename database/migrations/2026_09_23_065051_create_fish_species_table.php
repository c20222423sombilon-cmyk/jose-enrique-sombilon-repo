<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('fish_species', function (Blueprint $table) {
            $table->id();
            $table->string('fish_species_name');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fish_species');
    }
};