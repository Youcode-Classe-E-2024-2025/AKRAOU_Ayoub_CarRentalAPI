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
        Schema::create('payments', function (Blueprint $table) {
            $table->id(); // Clé primaire
            $table->foreignId('rental_id')->constrained()->onDelete('cascade'); // Clé étrangère vers la location
            $table->decimal('amount', 8, 2); // Montant payé
            $table->enum('payment_method', ['credit_card', 'paypal', 'bank_transfer'])->default('credit_card'); // Méthode de paiement
            $table->timestamp('payment_date')->useCurrent(); // Date du paiement
            $table->timestamps(); // Dates de création et de mise à jour
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
