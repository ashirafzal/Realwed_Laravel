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
            $table->string('couple_id');
            $table->string('cake_cutting_fee')->nullable();
            $table->string('cake_cutting_fee_estimate')->nullable();
            $table->string('cake_cutting_fee_actual')->nullable();
            $table->string('cake_cutting_fee_paid')->nullable();
            $table->string('cake_cuttingfee_pending')->nullable();
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
