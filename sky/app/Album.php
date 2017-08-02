<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
	protected $table = 'albums';
	protected $fillable = ['user_id', 'name','size'];
	protected $guarded = [];

	public function user()
	{
		return $this->belongsTo('App\User','user_id');
	}

    // album has many photos
    public function photos()
    {
        return $this->hasMany('App\Photo','album_id');
    }  	
}
