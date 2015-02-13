<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

	protected $fillable = ['name', 'alias'];

	public function articles()
	{
		return $this->belongToMany('App\Article');
	}

}