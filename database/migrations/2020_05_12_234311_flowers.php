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
            $table->string('couple_id');
            $table->string('bouquets')->nullable();
            $table->string('bouquets_estimate')->nullable();
            $table->string('bouquets_actual')->nullable();
            $table->string('bouquets_paid')->nullable();
            $table->string('bouquets_pending')->nullable();
            $table->string('decorations2')->nullable();
            $table->string('decorations2_estimate')->nullable();
            $table->string('decorations2_actual')->nullable();
            $table->string('decorations2_paid')->nullable();
            $table->string('decorations2_pending')->nullable();
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
