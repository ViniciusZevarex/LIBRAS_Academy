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
            $table->foreing('CodUser')->reference('CodUser')->on('users');
            $table->foreing('CodDoubts')->reference('CodDoubts')->on('doubts');
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
