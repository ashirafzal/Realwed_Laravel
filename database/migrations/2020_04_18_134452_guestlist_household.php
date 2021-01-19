<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GuestlistHousehold extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guest_list_household', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('couple_id');
            $table->string('household_fname');
            $table->string('household_lname');
            $table->string('household_family');
            $table->string('household_address');
            $table->string('household_address2')->nullable();
            $table->string('household_email');
            $table->string('household_city')->nullable();
            $table->string('household_country');
            $table->string('household_postcode')->nullable();
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
