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
        Schema::create('propuestas_profesor', function (Blueprint $table) {
            $table->unsignedInteger('propuesta_id');
            $table->string('profesor_rut',10);
            $table->date('fecha');
            $table->timeTz('hora', 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propuestas_profesor');
    }
};
