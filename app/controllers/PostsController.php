<?php

class PostsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
 				
		$posts = Post::all();
		return View::make('posts.index')->with('posts', $posts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
{
    // create the validator
    $validator = Validator::make(Input::all(), Post::$rules);

    // attempt validation
    if ($validator->fails()) {
    	return Redirect::back()->withInput()->withErrors($validator);
        // validation failed, redirect to the post create page with validation errors and old inputs
    } else {
    	$post = new Post();
		$post->title = Input::get('title');
		$post->body = Input::get('body');
		$post->user_id = Input::get('user_id');

		$result = $post->save();
        // validation succeeded, create and save the post
        }

		if($result) {

			return "Your post was saved!";
		}
		return Redirect::back()->withInput();;
	}
    





		


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);
		return View::make('posts.show')->with('post',$post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return 'edit a post';
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return 'update posts';
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return 'delete a specific post';
	}

	public function showAuthorposts($username)
	{
		return 'show author posts';
	}
}
