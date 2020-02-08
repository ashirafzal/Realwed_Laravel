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
        Schema::create('vendorlistings', function (Blueprint $table) {
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
            $table->string('postcode');
            $table->string('state');
            $table->string('country');
            $table->string('editordata');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('groomlounge');
            $table->string('bridalsuite');
            $table->string('tableandchairs');
            $table->string('getreadyrooms');
            $table->string('eventrentals');
            $table->string('outsidevendors');
            $table->string('barservices');
            $table->string('cateringservices');
            $table->string('cleanup');
            $table->string('eventplanner');
            $table->string('wifi');
            $table->string('petfriendly');
            $table->string('accommodations');
            $table->string('filebutton');
            $table->string('filebutton2');
            $table->string('filebutton3');
            $table->string('filebutton4');
            $table->string('filebutton5');
            $table->string('filebutton6');
            $table->string('video');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('youtube');
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
