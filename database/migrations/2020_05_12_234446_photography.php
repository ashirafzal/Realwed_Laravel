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
            $table->string('photographer')->nullable();
            $table->string('photographer_estimate')->nullable();
            $table->string('photographer_actual')->nullable();
            $table->string('photographer_paid')->nullable();
            $table->string('photographer_pending')->nullable();
            $table->string('videographer')->nullable();
            $table->string('videographer_estimate')->nullable();
            $table->string('videographer_actual')->nullable();
            $table->string('videographer_paid')->nullable();
            $table->string('videographer_pending')->nullable();
            $table->string('extraprints')->nullable();
            $table->string('extraprints_estimate')->nullable();
            $table->string('extraprints_actual')->nullable();
            $table->string('extraprints_paid')->nullable();
            $table->string('extraprints_pending')->nullable();
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
