<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserUnitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_unit', function (Blueprint $table) {
            $table->bigIncrements('CodUserUnit');
            $table->bigInteger('CodUser')->unsigned();
            $table->bigInteger('CodUnit')->unsigned();
            $table->foreign('CodUser')->references('CodUser')->on('users');
            $table->foreign('CodUnit')->references('CodUnit')->on('unit');
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
        Schema::dropIfExists('user_unit');
    }
}
