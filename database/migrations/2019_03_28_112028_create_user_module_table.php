<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserModuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_module', function (Blueprint $table) {
            $table->bigIncrements('CodUserModule');
            $table->bigInteger('CodUser')->unsigned();
            $table->bigInteger('CodModule')->unsigned();
            $table->foreign('CodUser')->references('CodUser')->on('users');
            $table->foreign('CodModule')->references('CodModule')->on('module');

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
        Schema::dropIfExists('user_module');
    }
}
