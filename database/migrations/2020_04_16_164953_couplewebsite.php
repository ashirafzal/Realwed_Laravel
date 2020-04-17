<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Couplewebsite extends Migration
{
    /*** Run the migrations.** @return void*/
    public function up()
    {
        Schema::create('couplewebsite', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('coupleid');
            $table->string('coupleemail');
            $table->string('couplename');
            $table->string('weddingdate');
            $table->string('weddingplace');
            $table->string('weddingaddress');
            $table->string('contactemail');
            $table->string('contactnumber');
            $table->string('whatsapp');
            $table->string('yourstory');
            $table->string('yourproposal');
            $table->string('rsvpformpic');
            $table->string('filebutton2');
            $table->string('filebutton3');
            $table->string('filebutton4');
        });
    }

    /*** Reverse the migrations.** @return void*/
    public function down()
    {
        //
    }
}
