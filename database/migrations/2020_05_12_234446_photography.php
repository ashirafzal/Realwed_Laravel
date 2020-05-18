<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Photography extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photography', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('coupleid');
            $table->string('photographer');
            $table->string('photographer_estimate');
            $table->string('photographer_actual');
            $table->string('photographer_paid');
            $table->string('photographer_pending');
            $table->string('videographer');
            $table->string('videographer_estimate');
            $table->string('videographer_actual');
            $table->string('videographer_paid');
            $table->string('videographer_pending');
            $table->string('extraprints');
            $table->string('extraprints_estimate');
            $table->string('extraprints_actual');
            $table->string('extraprints_paid');
            $table->string('extraprints_pending');
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
