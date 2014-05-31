<?php

// app/routes.php

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

// Bind route parameters.
Route::model('game', 'Game');

// Show pages.
Route::get('/', 'GamesController@index');
Route::get('/create', 'GamesController@create');
Route::get('/edit/{game}', 'GamesController@edit');
Route::get('/delete/{game}', 'GamesController@delete');
Route::get('/internshipdetail','GamesController@internshipdetail');
Route::get('/createstudent','GamesController@createstudent');
Route::get('/handleCreatestudent','GamesController@handleCreatestudent');
Route::get('/handleuserdata','GamesController@handleuserdata');
Route::get('/handleactivitycreate','GamesController@handleactivitycreate');
Route::get('/index1',function()
	{
		return View::make('index1');
	});
Route::get('/admin','GamesController@admin');
Route::get('/activitylist','GamesController@activitylist');
Route::get('/handleactivitylist','GamesController@handleactivitylist');
Route::get('/handlesubdomain/{q}','GamesController@handlesubdomain');
// Handle form submissions.
Route::post('/create', 'GamesController@handleCreate');
Route::post('/edit', 'GamesController@handleEdit');
Route::post('/delete', 'GamesController@handleDelete');
Route::post('/internshipdetail','GamesController@internshipdetail');
Route::post('/handleinternshipdetail','GamesController@handleInternshipdetailCreate');
Route::post('/handlesubdomain/{q}','GamesController@handlesubdomain');
Route::post('/createstudent','GamesController@createstudent');
Route::post('/handleCreatestudent','GamesController@handleCreatestudent');
Route::post('/handleuserdata','GamesController@handleuserdata');
Route::post('/handleuserinternshipdetail','GamesController@handleuserInternshipdetail');
Route::post('/handleactivitycreate','GamesController@handleactivitycreate');
Route::post('/activitylist','GamesController@activitylist');
Route::post('/handleactivitylist','GamesController@handleactivitylist');
Route::post('/index1',function()
	{
		return View::make('index1');
	});