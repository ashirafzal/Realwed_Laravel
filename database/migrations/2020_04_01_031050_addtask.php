<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Addtask extends Migration
{
    /*** Run the migrations.** @return void*/

    public function up()
    {
        Schema::create('addtask', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('coupleid');
            $table->string('tasktitle');
            $table->string('taskdate');
            $table->string('taskstatus');
        });
    }

    /*** Reverse the migrations.** @return void*/

    public function down()
    {
        //
    }
}
