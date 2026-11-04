<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('carrinho', function (Blueprint $table) {
            $table->id();
            $table->string('identificacao', 100);
            $table->string('localizacao', 150)->nullable();
            $table->unsignedInteger('quantidade_notebooks')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('carrinho');
    }
};