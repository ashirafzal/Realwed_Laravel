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
        Schema::create('hair_and_makeup', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('couple_id');
            $table->string('hair_and_makeup')->nullable();
            $table->string('hair_and_makeup_estimate')->nullable();
            $table->string('hair_and_makeup_actual')->nullable();
            $table->string('hair_and_makeup_paid')->nullable();
            $table->string('hair_and_makeup_pending')->nullable();
            $table->string('estimate_total')->nullable();
            $table->string('actual_total')->nullable();
            $table->string('paid_total')->nullable();
            $table->string('pending_total')->nullable();
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
