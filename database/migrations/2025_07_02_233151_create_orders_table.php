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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ['open', 'closed'])->default('open');
            $table->string('observations')->nullable();
            $table->boolean('organic')->default(false);
            $table->boolean('labelled')->default(false);   
            $table->foreignId('label_id')->nullable()->constrained('labels')->nullOnDelete()->nullable();  

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
