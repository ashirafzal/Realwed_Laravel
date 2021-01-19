<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Seatingtwelve extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seating_twelve', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('couple_id');
            $table->string('table_name');
            $table->string('seating_capacity');
            $table->string('guest1')->nullable();
            $table->string('guest2')->nullable();
            $table->string('guest3')->nullable();
            $table->string('guest4')->nullable();
            $table->string('guest5')->nullable();
            $table->string('guest6')->nullable();
            $table->string('guest7')->nullable();
            $table->string('guest8')->nullable();
            $table->string('guest9')->nullable();
            $table->string('guest10')->nullable();
            $table->string('guest11')->nullable();
            $table->string('guest12')->nullable();
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
