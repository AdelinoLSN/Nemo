<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEspeciePeixesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('especie_peixes', function (Blueprint $table) {
            $table->increments('id');
            $table->string("nome");
            $table->integer("tempo_desenvolvimento");
            $table->string("tipo_racao");
            $table->string("temperatura_ideal_agua");
            $table->integer("quantidade_por_volume");
            $table->integer("piscicultura_id")->unsigned();
            
            $table->foreign('piscicultura_id')->references('id')->on('pisciculturas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('especie_peixes');
    }
}
