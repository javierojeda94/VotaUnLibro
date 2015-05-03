<?php namespace VotaUnLibro\Http\Controllers;

use VotaUnLibro\User;

class UsersController extends Controller {

	public function getIndex()
	{
		$u = User::first();
		return view('users.index',compact('u'));
	}

}
