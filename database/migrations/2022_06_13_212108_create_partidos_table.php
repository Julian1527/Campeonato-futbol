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
        Schema::create('partidos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('arbitros_users_id')
            ->nullable()
            ->constrained('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreignId('jornadas_id')
            ->nullable()
            ->constrained()
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreignId('localidades_id')
            ->nullable()
            ->constrained()
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
        Schema::dropIfExists('partidos');
    }
};
