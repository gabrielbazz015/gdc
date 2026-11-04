<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('emprestimo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_usuario')->constrained('usuario')->cascadeOnDelete();
            $table->foreignId('id_responsavel')->constrained('responsavel');
            $table->foreignId('id_carrinho')->constrained('carrinho')->cascadeOnDelete();
            $table->dateTime('data_retirada');
            $table->dateTime('data_devolucao')->nullable();
            $table->string('finalidade');
            $table->string('status')->default('Solicitado');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('emprestimo');
    }
};