<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Flowers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flowers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('coupleid');
            $table->string('bouquets');
            $table->string('bouquets_estimate');
            $table->string('bouquets_actual');
            $table->string('bouquets_paid');
            $table->string('bouquets_pending');
            $table->string('decorations2');
            $table->string('decorations2_estimate');
            $table->string('decorations2_actual');
            $table->string('decorations2_paid');
            $table->string('decorations2_pending');
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
