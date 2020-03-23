<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ListingReview extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing_review', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('listownerid');
            $table->string('listid');
            $table->string('userid');
            $table->string('username');
            $table->string('userimage');
            $table->string('useremail');
            $table->string('usertype');
            $table->string('review_text');
            $table->string('review_name');
            $table->string('review_email');
            $table->string('qualityservices');
            $table->string('faciliteis');
            $table->string('staff');
            $table->string('flexibility');
            $table->string('valueofmoney');
            $table->string('overallrating');
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
