<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikeNCommentsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like_n_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('asset_id');
            $table->enum('asset_type', array('album','photo'));
            $table->enum('activity_type', array('like','comment'));
            $table->integer('friend_id');
            $table->text('comment')->nullable();
            $table->boolean('notification')->default(0);
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
        Schema::create('like_n_comments', function (Blueprint $table) {
            Schema::drop('like_n_comments');
        });
    }
}
