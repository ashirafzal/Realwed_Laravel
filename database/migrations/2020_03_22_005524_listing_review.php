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
            $table->string('list_ownerid');
            $table->string('list_id');
            $table->string('user_id');
            $table->string('user_name');
            $table->string('user_image');
            $table->string('user_email');
            $table->string('user_type')->nullable();
            $table->string('review_text')->nullable();
            $table->string('review_name')->nullable();
            $table->string('review_email')->nullable();
            $table->string('quality_services')->nullable();
            $table->string('faciliteis')->nullable();
            $table->string('staff')->nullable();
            $table->string('flexibility')->nullable();
            $table->string('value_of_money')->nullable();
            $table->string('overall_rating')->default(0);
            $table->string('date');
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
