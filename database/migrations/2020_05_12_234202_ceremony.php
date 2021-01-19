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
            $table->string('couple_id');
            $table->string('decorations')->nullable();
            $table->string('decorations_estimate')->nullable();
            $table->string('decorations_actual')->nullable();
            $table->string('decorations_paid')->nullable();
            $table->string('decorations_pending')->nullable();
            $table->string('locationfee')->nullable();
            $table->string('locationfee_estimate')->nullable();
            $table->string('locationfee_actual')->nullable();
            $table->string('locationfee_paid')->nullable();
            $table->string('locationfee_pending')->nullable();
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
