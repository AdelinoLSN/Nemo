<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQualidadeAguasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualidade_aguas', function (Blueprint $table) {
        		$table->increments('id');
            $table->float('ph')->unsigned();
            $table->dateTime('data');
      		$table->integer("id_tanque")->unsigned();
            $table->timestamps();
            $table->foreign('id_tanque')->references('id')->on('tanques');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qualidade_aguas');
    }
}
