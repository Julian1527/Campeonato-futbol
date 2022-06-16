<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jornadas', function (Blueprint $table) {
            $table->id();

            $table->foreignId('fechas_fases_locales_id')
            ->nullable()
            ->constrained('fechas_fases')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreignId('fechas_fases_visitantes_id')
            ->nullable()
            ->constrained('fechas_fases')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jornadas');
    }
};
