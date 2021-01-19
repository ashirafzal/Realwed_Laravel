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
        Schema::create('guest_list_couple', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('couple_id');
            $table->string('couple_first_name');
            $table->string('couple_last_name');
            $table->string('couple_partner_fname');
            $table->string('couple_partner_lname');
            $table->string('couple_group')->nullable();
            $table->string('couple_address');
            $table->string('couple_address2')->nullable();
            $table->string('couple_country');
            $table->string('couple_postcode')->nullable();
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
