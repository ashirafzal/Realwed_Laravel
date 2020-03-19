<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Requestquote extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requestquote', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('list_creator_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('weddingdate');
            $table->string('comments');
            $table->string('time');
            $table->string('date');
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
