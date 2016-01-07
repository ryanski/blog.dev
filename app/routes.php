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

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

// Route::get('/sayhello/{name}', function($name)
// {
// 	if($name == "Chris") {
// 		return Redirect::to('/');
// 	} else {

//     return "Hello, $name!";
// }
// });

Route::get('/resume', function()
{
	return "This is my resume.";

});

Route::get('/portfolio', function()
{
	return "This is my portfolio.";

});

Route::get('/sayhello/{name}', function($name)
{
	$data = array('name'=>$name);
    return View::make('my-first-view')->with($data);
});

Route::get('/rolldice/{guess}', function($guess)
{
	$number=mt_rand(1,6);
	$data = array('guess'=>$guess,
				  'number'=>$number
	);
	return View::make('roll-dice', $data);
});

Route::get('/resume', function()
{
	return View::make('resume');
});

Route::get('/portfolio', function()
{
	return View::make('portfolio');
});