<?php namespace VotaUnLibro\Http\Controllers;

use VotaUnLibro\Http\Requests;
use VotaUnLibro\Http\Controllers\Controller;
use VotaUnLibro\Review as Review;

use Illuminate\Http\Request;

class ReviewsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request, $book_id)
	{
		$review = new Review();
		$review->title 			= $request->input('title');
		$review->long_review 	= $request->input('long_review');
		$review->book_id		= $book_id;
		$review->user_id		= $request->user()->id;
		$review->save();
		return redirect("books/show/$book_id");
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
