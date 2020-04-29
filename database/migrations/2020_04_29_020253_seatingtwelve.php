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
        Schema::create('seatingtwelve', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('coupleid');
            $table->string('tablename');
            $table->string('seatingcapacity');
            $table->string('guest1');
            $table->string('guest2');
            $table->string('guest3');
            $table->string('guest4');
            $table->string('guest5');
            $table->string('guest6');
            $table->string('guest7');
            $table->string('guest8');
            $table->string('guest9');
            $table->string('guest10');
            $table->string('guest11');
            $table->string('guest12');
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
