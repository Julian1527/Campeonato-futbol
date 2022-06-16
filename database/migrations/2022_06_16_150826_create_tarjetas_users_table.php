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
        Schema::create('tarjetas_users', function (Blueprint $table) {
            $table->id();

            $table->foreignId('tipo_tarjetas_id')
            ->nullable()
            ->constrained()
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreignId('users_id')
            ->nullable()
            ->constrained()
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->dateTime('minuto_tarjeta');

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
        Schema::dropIfExists('tarjetas_users');
    }
};
