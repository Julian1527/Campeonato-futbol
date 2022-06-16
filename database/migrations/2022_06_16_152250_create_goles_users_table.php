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
        Schema::create('goles_users', function (Blueprint $table) {
            $table->id();

            $table->foreignId('users_id')
            ->nullable()
            ->constrained()
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreignId('partidos_id')
            ->nullable()
            ->constrained()
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreignId('teams_id')
            ->nullable()
            ->constrained()
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->dateTime('minuto_gol');

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
        Schema::dropIfExists('goles_users');
    }
};
