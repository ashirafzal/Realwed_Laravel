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
        Schema::create('printed_materials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('couple_id');
            $table->string('save_the_dates')->nullable();
            $table->string('save_the_dates_estimate')->nullable();
            $table->string('save_the_dates_actual')->nullable();
            $table->string('save_the_dates_paid')->nullable();
            $table->string('save_the_dates_pending')->nullable();
            $table->string('invitations')->nullable();
            $table->string('invitations_estimate')->nullable();
            $table->string('invitations_actual')->nullable();
            $table->string('invitations_paid')->nullable();
            $table->string('invitations_pending')->nullable();
            $table->string('weddingprograms')->nullable();
            $table->string('weddingprograms_estimate')->nullable();
            $table->string('weddingprograms_actual')->nullable();
            $table->string('weddingprograms_paid')->nullable();
            $table->string('weddingprograms_pending')->nullable();
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
