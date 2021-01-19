<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorlistingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_listings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('vendorid');
            $table->string('name');
            $table->string('email');
            $table->string('type');
            $table->string('title');
            $table->string('Category');
            $table->string('seat');
            $table->string('price');
            $table->string('address');
            $table->string('city');
            $table->string('postcode')->nullable();
            $table->string('state')->nullable();
            $table->string('country');
            $table->string('editordata')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('groomlounge')->nullable();
            $table->string('bridalsuite')->nullable();
            $table->string('tableandchairs')->nullable();
            $table->string('getreadyrooms')->nullable();
            $table->string('eventrentals')->nullable();
            $table->string('outsidevendors')->nullable();
            $table->string('barservices')->nullable();
            $table->string('cateringservices')->nullable();
            $table->string('cleanup')->nullable();
            $table->string('eventplanner')->nullable();
            $table->string('wifi')->nullable();
            $table->string('petfriendly')->nullable();
            $table->string('accommodations')->nullable();
            $table->string('filebutton')->nullable();
            $table->string('filebutton2')->nullable();
            $table->string('filebutton3')->nullable();
            $table->string('filebutton4')->nullable();
            $table->string('filebutton5')->nullable();
            $table->string('filebutton6')->nullable();
            $table->string('video')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
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
        Schema::dropIfExists('vendorlistings');
    }
}
