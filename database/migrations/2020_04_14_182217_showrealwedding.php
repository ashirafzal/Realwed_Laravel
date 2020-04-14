<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Showrealwedding extends Migration
{
    /*** Run the migrations.** @return void*/
    public function up()
    {
        Schema::create('showrealwedding', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('coupleid');
            $table->string('showprofile');
        });
    }

    /*** Reverse the migrations.** @return void */
    public function down()
    {
        //
    }
}
