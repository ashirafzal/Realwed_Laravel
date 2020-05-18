<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Hairandmakeup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hairandmakeup', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('coupleid');
            $table->string('hairandmakeup');
            $table->string('hairandmakeup_estimate');
            $table->string('hairandmakeup_actual');
            $table->string('hairandmakeup_paid');
            $table->string('hairandmakeup_pending');
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
