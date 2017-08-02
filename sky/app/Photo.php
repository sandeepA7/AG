<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
	protected $table = 'albums';
	protected $fillable = ['user_id', 'name'];
	protected $guarded = [];
	
	public function album()
	{
		return $this->belongsTo('App\Album','album_id');
	}
}
