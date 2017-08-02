<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'sname', 'username', 'email', 'phone', 'password', 'gender', 'dob', 'country', 'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // user has many albums
    public function albums()
    {
        return $this->hasMany('App\Album','user_id');
    }
    // user has many photos
    public function photos()
    {
        return $this->hasMany('App\Photo','user_id');
    }         
}
