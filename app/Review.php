<?php namespace VotaUnLibro;

use Illuminate\Database\Eloquent\Model;

class Review extends Model {

	public function book(){
		return $this->belongsTo('VotaUnLibro\Book');
	}

	public function writer(){
		return $this->belongsTo('VotaUnLibro\User');
	}

}
