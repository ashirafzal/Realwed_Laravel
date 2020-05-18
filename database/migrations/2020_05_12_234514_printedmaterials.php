<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Printedmaterials extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('printedmaterials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('coupleid');
            $table->string('savethedates');
            $table->string('savethedates_estimate');
            $table->string('savethedates_actual');
            $table->string('savethedates_paid');
            $table->string('savethedates_pending');
            $table->string('invitations');
            $table->string('invitations_estimate');
            $table->string('invitations_actual');
            $table->string('invitations_paid');
            $table->string('invitations_pending');
            $table->string('weddingprograms');
            $table->string('weddingprograms_estimate');
            $table->string('weddingprograms_actual');
            $table->string('weddingprograms_paid');
            $table->string('weddingprograms_pending');
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
