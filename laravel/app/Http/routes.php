<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
//::get('/', 'WelcomeController@index');

//Route::get('home', 'HomeController@index');








Route::group(['middleware' => 'web'], function () {
    Route::auth();


    Route::get('books/admin' , 'BookController@companies');
    Route::get('/home', 'HomeController@index');
    Route::resource('books','BookController');
    Route::resource('users','UserController');
    Route::resource('groups','GroupController');
    Route::resource('trashed-books','TrashedBookController');
    Route::resource('trashed-groups','TrashedGroupController');
    Route::post('/trashed-books/restore/{id}','TrashedBookController@restore');
    Route::post('/trashed-groups/restore/{id}','TrashedGroupController@restore');


Route::get('upload', function() {
  return View::make('books.create');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('livesearch.php', function(){
	return View::make('books.livesearch');
});


Route::get('xmlparse', function(){
	return View::make('users.xml');
});

Route::get('maps', function(){
	return View::make('users.maps');
});

Route::post('apply/upload', 'BookController@store');
});
