<?php namespace VotaUnLibro;

use Illuminate\Database\Eloquent\Model;

class Book extends Model {

	
	public function user(){
		return $this->belongsTo('VotaUnLibro\User');
	}

	public function reviews(){
		return $this->hasMany('VotaUnLibro\Review');
	}

}
