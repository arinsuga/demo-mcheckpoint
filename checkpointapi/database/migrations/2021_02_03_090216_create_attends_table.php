<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attends', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable();
            $table->string('username')->nullable();
            $table->date('attend_dt');
            $table->string('attend_utctz')->nullable();
            $table->bigInteger('attend_utcmillis')->nullable();
            $table->integer('attend_utcoffset')->nullable();

            $table->string('checkin_client', 50)->nullable();
            $table->dateTime('checkin_time')->nullable();
            $table->string('checkin_utctz')->nullable();
            $table->bigInteger('checkin_utcmillis')->nullable();
            $table->integer('checkin_utcoffset')->nullable();

            $table->string('checkin_city')->nullable();
            $table->string('checkin_address', 1024)->nullable();

            $table->string('checkin_latitude')->nullable();
            $table->string('checkin_longitude')->nullable();
            $table->string('checkin_ip')->nullable();
            $table->json('checkin_metadata')->nullable();
            $table->string('checkin_image', 1024)->nullable();
            $table->string('checkin_title', 512)->nullable();
            $table->string('checkin_subtitle', 1024)->nullable();
            $table->string('checkin_description', 1024)->nullable();

            $table->string('checkout_client', 50)->nullable();
            $table->dateTime('checkout_time')->nullable();
            $table->string('checkout_utctz')->nullable();
            $table->bigInteger('checkout_utcmillis')->nullable();
            $table->integer('checkout_utcoffset')->nullable();

            $table->string('checkout_city')->nullable();
            $table->string('checkout_address', 1024)->nullable();

            $table->string('checkout_latitude')->nullable();
            $table->string('checkout_longitude')->nullable();
            $table->string('checkout_ip')->nullable();
            $table->json('checkout_metadata')->nullable();
            $table->string('checkout_image', 1024)->nullable();
            $table->string('checkout_title', 512)->nullable();
            $table->string('checkout_subtitle', 1024)->nullable();
            $table->string('checkout_description', 1024)->nullable();
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
        Schema::dropIfExists('attend');
    }
}
