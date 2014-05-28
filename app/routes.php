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
Route::get('/admin',function() {
   $games = companys_personal_info::all();
    return View::make('admin')->with('games',$games);
});
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