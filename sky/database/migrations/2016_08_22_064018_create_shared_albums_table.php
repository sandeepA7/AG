<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSharedAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shared_albums', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('album_id');
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
        Schema::create('shared_albums', function (Blueprint $table) {
            Schema::drop('shared_albums');
        });
    }
}
