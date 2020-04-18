<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GuestlistCouple extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guestlist_couple', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('coupleid');
            $table->string('couple_firstname');
            $table->string('couple_lastname');
            $table->string('couple_partnerfname');
            $table->string('couple_partnerlname');
            $table->string('couple_group');
            $table->string('couple_address');
            $table->string('couple_address2');
            $table->string('couple_country');
            $table->string('couple_postcode');
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
