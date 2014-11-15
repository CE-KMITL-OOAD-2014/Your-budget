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


// Route::get('/','AuthenticationController@check' );


// Route::get('home', function()
// {
// 	return  View::make('index');
// });

Route::get('home', 'HomeController@showWelcome');


Route::post('logIn', 'AuthenticationController@logIn' );

Route::get('logOut', 'AuthenticationController@logOut');

Route::post('register', 'AuthenticationController@register');


Route::post('income', 'RecordController@addIncome');

Route::post('outcome', 'RecordController@addOutcome');

Route::post('remove', 'RecordController@remove');

Route::any('list', 'RecordController@listRecord');

Route::post('remove', 'RecordController@remove');

Route::post('reminder', 'RecordController@addReminder');

Route::post('removeReminder', 'RecordController@removeReminder');

Route::post('achiveReminder', 'RecordController@achiveReminder');


Route::any('ranking', 'RankingController@showRank');






















