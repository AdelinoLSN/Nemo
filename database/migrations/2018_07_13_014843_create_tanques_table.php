<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTanquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanques', function (Blueprint $table) {
            $table->increments('id');
            $table->float('volume')->unsigned();
            $table->string('manutencao_necessaria')->default("Não");
            $table->integer('psicultura_id');

            $table->foreign('psicultura_id')->references('id')->on('psiculturas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tanques');
    }
}
