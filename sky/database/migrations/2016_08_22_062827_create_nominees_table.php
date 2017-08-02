<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNomineesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nominees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('nominee_user_id');
            $table->boolean('view')->default(0);
            $table->boolean('download')->default(0);
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
        Schema::create('nominees', function (Blueprint $table) {
            Schema::drop('nominees');
        });
    }
}
