<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',125);
            $table->string('email',125);
            $table->string('address',255);
            $table->string('city',125);
            $table->string('state',125); 
            $table->string('county',125); 
            $table->integer('zip'); 
            $table->integer('phone'); 
            $table->integer('fax'); 
            $table->string('website',255); 
            $table->integer('cuisine'); 
            $table->string('serves'); 
            $table->string('alcohol'); 
            $table->string('dress_code'); 
            $table->string('payment'); 
            $table->string('features'); 
            $table->string('reservations');
            $table->string('owners_name',125);
            $table->integer('owners_id');
            $table->integer('updated_by');
            $table->tinyInteger('status');
            $table->index('email','owners_id','cuisine');
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
        Schema::drop('restaurants');
    }
}
