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
        Schema::create('pallets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->onDelete('cascade');
            $table->string('pallet_number');      // e.g., P1283
            $table->string('field_number')->nullable(); // e.g., 104
            $table->string('lot')->nullable();    // e.g., EMERALD
            $table->integer('box_count');
            $table->string('variety')->nullable(); 
            $table->string('pot_size')->nullable(); // e.g., 6oz
            $table->string('label')->nullable();    // e.g., KB
            $table->string('traceability_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pallets');
    }
};
