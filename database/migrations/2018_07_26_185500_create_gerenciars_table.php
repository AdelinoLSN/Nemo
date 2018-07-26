<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGerenciarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gerenciars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('psicultura_id');

            $table->unique(['user_id', 'psicultura_id']);

            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('gerenciars');
    }
}
