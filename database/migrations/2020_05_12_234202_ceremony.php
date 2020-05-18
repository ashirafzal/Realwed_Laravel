<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ceremony extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ceremony', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('coupleid');
            $table->string('decorations');
            $table->string('decorations_estimate');
            $table->string('decorations_actual');
            $table->string('decorations_paid');
            $table->string('decorations_pending');
            $table->string('locationfee');
            $table->string('locationfee_estimate');
            $table->string('locationfee_actual');
            $table->string('locationfee_paid');
            $table->string('locationfee_pending');
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
