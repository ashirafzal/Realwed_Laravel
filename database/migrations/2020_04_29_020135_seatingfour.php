<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Seatingfour extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seating_four', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('couple_id');
            $table->string('table_name')->nullable();
            $table->string('seating_capacity')->nullable();
            $table->string('guest1')->nullable();
            $table->string('guest2')->nullable();
            $table->string('guest3')->nullable();
            $table->string('guest4')->nullable();
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
