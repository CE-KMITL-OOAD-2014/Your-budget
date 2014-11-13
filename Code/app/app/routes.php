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

Route::get('/', function()
{
	if (Auth::check()) 
		return Redirect::to('home');
	return  View::make('login');
});


Route::get('home', function()
{
	return  View::make('index');
});


// Route::get('index', function()
// {
// 	return  View::make('index');
// });


Route::post('logIn', 'AuthenticationController@logIn' );

Route::get('logOut', 'AuthenticationController@logOut');

Route::post('register', 'AuthenticationController@register');





Route::post('income', 'RecordController@addIncome');

Route::post('outcome', 'RecordController@addOutcome');

Route::get('remove', 'RecordController@remove');
