<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Venue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venue', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('couple_id');
            $table->string('locationfees')->nullable();
            $table->string('locationfees_estimate')->nullable();
            $table->string('locationfees_actual')->nullable();
            $table->string('locationfees_paid')->nullable();
            $table->string('locationfees_pending')->nullable();
            $table->string('carexpense')->nullable();
            $table->string('carexpense_estimate')->nullable();
            $table->string('carexpense_actual')->nullable();
            $table->string('carexpense_paid')->nullable();
            $table->string('carexpense_pending')->nullable();
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
