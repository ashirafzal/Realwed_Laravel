<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Addtask extends Migration
{
    /*** Run the migrations.** @return void*/

    public function up()
    {
        Schema::create('add_task', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('couple_id');
            $table->string('task_title');
            $table->string('task_date')->nullable();
            $table->string('task_status');
            $table->timestamps();
        });
    }

    /*** Reverse the migrations.** @return void*/

    public function down()
    {
        //
    }
}
