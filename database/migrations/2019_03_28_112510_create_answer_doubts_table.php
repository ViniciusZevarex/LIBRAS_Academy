<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswerDoubtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_doubts', function (Blueprint $table) {
            $table->bigIncrements('CodAnswerDoubts');
            $table->bigInteger('CodUser')->unsigned();
            $table->foreign('CodUser')->references('CodUser')->on('users');
            $table->bigInteger('CodDoubts')->unsigned();
            $table->foreign('CodDoubts')->references('CodDoubts')->on('doubts');
            $table->string('Description');
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
        Schema::dropIfExists('answer_doubts');
    }
}
