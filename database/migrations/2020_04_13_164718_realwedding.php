<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Realwedding extends Migration
{
    /*** Run the migrations.** @return void */
    public function up()
    {
        Schema::create('real_wedding', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('couple_id');
            $table->string('couple_email');
            $table->string('featured_image')->nullable();
            $table->string('file_button')->nullable();
            $table->string('file_button2')->nullable();
            $table->string('file_button3')->nullable();
            $table->string('file_button4')->nullable();
            $table->string('file_button5')->nullable();
            $table->string('file_button6')->nullable();
            $table->string('from_website')->nullable();
            $table->string('from_outside')->nullable();
            $table->string('both')->nullable();
            $table->string('textarea')->nullable();
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
        //
    }
}
