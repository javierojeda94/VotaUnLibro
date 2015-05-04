<?php namespace VotaUnLibro\Http\Controllers;

use VotaUnLibro\User;
use Auth;

class UsersController extends Controller {

	public function profile()
	{
		$user = Auth::user();
		return view('users.profile',compact('user'));
	}

}
