<?php

class PostsController extends BaseController {
	public function __construct()
	{
		parent::__construct();

		$this->beforeFilter('auth', array('except' => array('index', 'show')));
		// $this->beforeFilter('auth', array('only') => array('create', 'store')));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
 		// App::abort(403);
		$posts = Post::with('user')->paginate(4);
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
    	$post = new Post();
    	return $this->validateAndSave($post);
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

		if(!$post) {
			Session::flash('errorMessage', 'This post does not exist');
			return Redirect::action('PostsController@index');
		}

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
		$post = Post::find($id);
		return View::make('posts.edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::find($id);
		return $this->validateAndSave($post);
	}	


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);
		$post->delete();
		Redirect::action('PostsController@show', $post->id);
	}

	public function showAuthorposts($username)
	{
		return 'show author posts';
	}

	protected function validateAndSave($post)
	{  //this takes in a param object.
		// create the validator
    $validator = Validator::make(Input::all(), Post::$rules);

    // attempt validation
    if ($validator->fails()) {
    	return Redirect::back()->withInput()->withErrors($validator);
        // validation failed, redirect to the post create page with validation errors and old inputs
    } else {
		$post->title = Input::get('title');
		$post->body = Input::get('body');
		// $post->user_id = User::first();
		$post->user_id = Auth::id();
		// or User::all()->random();
		// $post->user_id = Input::get('user_id');

		$result = $post->save();
        // validation succeeded, create and save the post
        }

		if($result) {
			return Redirect::action('PostsController@show', $post->id);
		} else {
			return Redirect::back()->withInput();;
		} 

		//doesn't need a route because it's protected.  only on postscontroller.
	}	
}
