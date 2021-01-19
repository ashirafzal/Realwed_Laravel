<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Couplewebsite extends Migration
{
    /*** Run the migrations.** @return void*/
    public function up()
    {
        Schema::create('couple_website', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('couple_id');
            $table->string('couple_email');
            $table->string('couple_name');
            $table->string('wedding_date');
            $table->string('wedding_place')->nullable();
            $table->string('wedding_address')->nullable();
            $table->string('contact_email');
            $table->string('contact_number')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('your_story')->nullable();
            $table->string('your_proposal')->nullable();
            $table->string('rsvp_form_pic')->nullable();
            $table->string('file_button2')->nullable();
            $table->string('file_button3')->nullable();
            $table->string('file_button4')->nullable();
            $table->timestamps();
        });
    }

    /*** Reverse the migrations.** @return void*/
    public function down()
    {
        //
    }
}
