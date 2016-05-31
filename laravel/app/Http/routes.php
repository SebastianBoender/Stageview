<?php

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


Route::get('upload', ['middleware' => 'auth', function() {
  return View::make('books.create');
}]);

Route::get('/', ['middleware' => 'auth', function () {
    return view('welcome');
}]);

Route::get('livesearch.php', function(){
	return View::make('books.livesearch');
});


Route::get('xmlparse', function(){
	return View::make('users.xml');
});

Route::get('maps', function(){
	return View::make('users.maps');
});

Route::post('apply/upload', ['middleware' => 'auth', 'uses' => 'BookController@store']);
});
