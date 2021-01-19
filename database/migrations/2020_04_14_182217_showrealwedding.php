<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Showrealwedding extends Migration
{
    /*** Run the migrations.** @return void*/
    public function up()
    {
        Schema::create('show_real_wedding', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('couple_id');
            $table->string('show_profile');
            $table->timestamps();
        });
    }

    /*** Reverse the migrations.** @return void */
    public function down()
    {
        //
    }
}
