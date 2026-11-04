<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('chave', function (Blueprint $table) {
            $table->id();
            $table->string('identificacao');
            $table->string('status');
            $table->foreignId('id_carrinho')->constrained('carrinho')->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('chave');
    }
};