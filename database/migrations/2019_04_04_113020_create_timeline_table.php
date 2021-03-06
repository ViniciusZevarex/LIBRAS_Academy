<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimelineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timeline', function (Blueprint $table) {
            $table->bigIncrements('CodTimeline');
            $table->bigInteger('CodModule')->unsigned();
            $table->foreign('CodModule')->references('CodModule')->on('module');
            $table->integer('CodElement');
            $table->integer('Position');
            $table->string('typeElement');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timeline');
    }
}
