<?php

Route::group(['middleware' => 'web'], function () {
    Route::auth();


    Route::get('companies/admin' , 'CompanyController@companies');
    Route::get('/home', 'HomeController@index');
    Route::resource('companies','CompanyController');
    Route::resource('users','UserController');
    Route::resource('groups','GroupController');
    Route::resource('trashed-companies','TrashedCompanyController');
    Route::resource('trashed-groups','TrashedGroupController');
    Route::post('/trashed-companies/restore/{id}','TrashedCompanyController@restore');
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

Route::post('apply/upload', ['middleware' => 'auth', 'uses' => 'CompanyController@store']);
});
