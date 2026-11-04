<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('notebook', function (Blueprint $table) {
            $table->id();
            $table->string('patrimonio', 50)->unique();
            $table->string('modelo', 100)->nullable();
            $table->string('status', 100)->default('Disponível');
            $table->foreignId('id_carrinho')->constrained('carrinho')->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('notebook');
    }
};