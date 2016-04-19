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

Route::get('/', function () {
    return view('welcome');
});

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


Route::get('books/admin' , 'BookController@companies');

Route::resource('books','BookController');

Route::group(['middleware' => ['web']], function () {
    //
});



Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});

Route::get('upload', function() {
  return View::make('books.create');
});

Route::post('apply/upload', 'BookController@store');