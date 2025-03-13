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
        Schema::create('cars', function (Blueprint $table) {
            $table->id(); // Clé primaire
            $table->string('brand'); // Marque de la voiture
            $table->string('model'); // Modèle de la voiture
            $table->year('year'); // Année de fabrication de la voiture
            $table->decimal('price_per_day', 8, 2); // Prix par jour de location
            $table->enum('status', ['available', 'rented', 'maintenance'])->default('available'); // Statut de la voiture
            $table->timestamps(); // Dates de création et de mise à jour
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
