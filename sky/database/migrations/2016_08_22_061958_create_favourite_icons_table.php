<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavouriteIconsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favourite_icons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('file_name');
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
        Schema::create('favourite_icons', function (Blueprint $table) {
            Schema::drop('favourite_icons');
        });
    }
}
