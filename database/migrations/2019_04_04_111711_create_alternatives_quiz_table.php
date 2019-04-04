<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlternativesQuizTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alternatives_quiz', function (Blueprint $table) {
            $table->bigIncrements('CodAlternativesQuiz');
            $table->foreing('CodQuiz')->reference('CodQuiz')->on('quiz');
            $table->string('description');
            $table->boolean('correct');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alternatives_quiz');
    }
}
