<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fname');
            $table->string('sname');
            $table->string('username');
            $table->string('email')->unique()->nullable();
            $table->string('phone')->nullable();
            $table->string('password');
            $table->enum('gender', array('Male','Female'));
            $table->date('dob');
            $table->text('profile_photo')->nullable();
            $table->integer('favourite_icon_id')->nullable();
            $table->text('about_me')->nullable();
            $table->string('profile_display_status');
            $table->integer('no_of_nominees')->nullable();
            $table->integer('no_of_friends')->nullable();
            $table->integer('no_of_albums')->nullable();
            $table->integer('no_of_photos')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0=>Inactive, 1=> Active, 2=>Nominee');
            $table->uuid('unique_device_id')->->nullable();
            $table->ipAddress('ip_address');            
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
