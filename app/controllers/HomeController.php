<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}



	public function showResume()
	{
		return View::make('resume');
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	public function sayHello($name)
	{
		$data = array('name'=>$name);
    	return View::make('my-first-view')->with($data);
	}

	public function rollDice($guess)
	{
		$number=mt_rand(1,6);
		$data = array('guess'=>$guess,
				  'number'=>$number
	);
		return View::make('roll-dice', $data);
	}

	public function getLogin()
	{
		return View::make('login');
	}

	public function postLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password');
		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
			Success::flash('successMessage', 'Welcome to the blog, user!');
    		return Redirect::intended('/posts');
		} else {
    	// login failed, go back to the login screen
		 Session::flash('error message', 'Login failed.  Your username and/or password don\'t match.');
		return Redirect::back()->withInput();
		}
	}

	public function getLogout()
	{
		Auth::logout();
		return Redirect::action('HomeController@showWelcome');
		// Auth::logout();
		// Session::flash('successMessage', 'Thank you, come again!');
		// return Redirect::action('PostsController@index');
	}
}
