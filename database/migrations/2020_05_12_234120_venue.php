<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Venue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venue', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('coupleid');
            $table->string('locationfees');
            $table->string('locationfees_estimate');
            $table->string('locationfees_actual');
            $table->string('locationfees_paid');
            $table->string('locationfees_pending');
            $table->string('carexpense');
            $table->string('carexpense_estimate');
            $table->string('carexpense_actual');
            $table->string('carexpense_paid');
            $table->string('carexpense_pending');
            $table->string('estimate_total');
            $table->string('actual_total');
            $table->string('paid_total');
            $table->string('pending_total');
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
