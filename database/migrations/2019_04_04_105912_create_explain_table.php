<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExplainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('explain', function (Blueprint $table) {
            $table->bigIncrements('CodExplain');
            $table->foreing('CodModule')->reference('CodModule')->on('Module');
            $table->string('title');
            $table->string('description');
            $table->string('Video')->nullable;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('explain');
    }
}
