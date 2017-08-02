<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSharedPhotosTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shared_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('photo_id');
            $table->integer('friend_id');
            $table->boolean('notification')->default(0);
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
        Schema::create('shared_photos', function (Blueprint $table) {
            Schema::drop('shared_photos');
        });
    }
}
