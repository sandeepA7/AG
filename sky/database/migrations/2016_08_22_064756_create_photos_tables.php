<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('album_id');
            $table->string('name');
            $table->text('description');
            $table->string('location')->nullable();
            $table->boolean('shared')->default(0);
            $table->boolean('favourite')->default(0);
            $table->datetime('schdedule_time')->nullable();
            $table->text('share_comment')->nullable();
            $table->boolean('deleted')->default(0);
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
        Schema::create('photos', function (Blueprint $table) {
            Schema::drop('photos');
        });
    }
}
