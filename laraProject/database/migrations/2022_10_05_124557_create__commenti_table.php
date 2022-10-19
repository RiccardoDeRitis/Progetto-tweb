<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Commenti', function (Blueprint $table) {
            $table->bigIncrements('IDCommenti');
            $table->string('Descrizione', 105);
            $table->string('Data', 45);
            $table->bigInteger('IDPost')->unsigned()->index();
            $table->foreign('IDPost')->references('IDPost')->on('Post');
            $table->bigInteger('IDUtente')->unsigned()->index();
            $table->foreign('IDUtente')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Commenti');
    }
}
