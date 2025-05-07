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
        Schema::create('quality_inspections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pallet_id')->constrained()->onDelete('cascade');
            $table->float('qc_percentage')->nullable();
            $table->float('defect_red')->nullable();
            $table->float('defect_sensory')->nullable();
            $table->float('defect_soft')->nullable();
            $table->string('inspector')->nullable();    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quality_inspections');
    }
};
