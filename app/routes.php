<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/sayhello/{name}', 'HomeController@sayHello');


Route::get('/rolldice/{guess}', 'HomeController@rollDice');
 

Route::get('/form', 'HomeController@showForm');
Route::post('/form', "HomeController@handleForm");

// Route::get('posts/my-posts/{username}', 'PostsController@showAuthorPosts');

Route::resource('/posts', 'PostsController'); 


Route::get('/test', function() {
	Input::get('name', 'Bob');
	// dd(Input::all());
	// dd(Input::get('today'));
	// if(Input::has('name')) {
	// 	dd('yes it exists');
	// } else {
	// 	dd('no it does not');
	// }

	//http://blog.dev/test?test=something&some=key&today=friday
});


Route::get('/my-first-view', function(){
	return View::make('my-first-view');
});








