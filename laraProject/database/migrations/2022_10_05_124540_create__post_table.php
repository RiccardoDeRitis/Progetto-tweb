<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Post', function (Blueprint $table) {
            $table->bigIncrements('IDPost');
            $table->string('Titolo', 105);
            $table->string('Descrizione', 105);
            $table->string('Data', 45);
            $table->integer('Like');
            $table->bigInteger('IDBlog')->unsigned()->index();
            $table->foreign('IDBlog')->references('IDBlog')->on('Blog');
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
        Schema::dropIfExists('Post');
    }
}
