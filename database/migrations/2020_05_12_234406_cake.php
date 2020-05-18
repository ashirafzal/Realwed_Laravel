<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cake extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cake', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('coupleid');
            $table->string('cakecuttingfee');
            $table->string('cakecuttingfee_estimate');
            $table->string('cakecuttingfee_actual');
            $table->string('cakecuttingfee_paid');
            $table->string('cakecuttingfee_pending');
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
