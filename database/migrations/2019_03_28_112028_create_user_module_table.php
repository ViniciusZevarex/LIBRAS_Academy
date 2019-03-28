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
            $table->foreing('CodUser')->reference('CodUser')->on('users');
            $table->foreing('CodModule')->reference('CodModule')->on('module');
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
