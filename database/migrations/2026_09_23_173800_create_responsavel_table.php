<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('responsavel', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 150);
            $table->string('matricula', 50)->unique();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('responsavel');
    }
};