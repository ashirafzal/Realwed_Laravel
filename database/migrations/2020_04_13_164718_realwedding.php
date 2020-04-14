<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Realwedding extends Migration
{
    /*** Run the migrations.** @return void */
    public function up()
    {
        Schema::create('realwedding', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('coupleid');
            $table->string('coupleemail');
            $table->string('featured_image');
            $table->string('filebutton');
            $table->string('filebutton2');
            $table->string('filebutton3');
            $table->string('filebutton4');
            $table->string('filebutton5');
            $table->string('filebutton6');
            $table->string('fromwebsite');
            $table->string('fromoutside');
            $table->string('both');
            $table->string('textarea');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
