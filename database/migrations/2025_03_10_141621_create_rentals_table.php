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
        Schema::create('rentals', function (Blueprint $table) {
            $table->id(); // Clé primaire
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Clé étrangère vers l'utilisateur
            $table->foreignId('car_id')->constrained('cars')->onDelete('cascade'); // Clé étrangère vers la voiture
            $table->date('start_date'); // Date de début de la location
            $table->date('end_date'); // Date de fin de la location
            $table->enum('status', ['pending', 'active', 'completed', 'cancelled'])->default('pending'); // Statut de la location
            $table->timestamps(); // Dates de création et de mise à jour
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};
