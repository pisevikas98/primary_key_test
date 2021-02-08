<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/	


Auth::routes();



Route::get('/', function () {
    return redirect("/login");
});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['\App\Http\Middleware\Authenticate']], function () {

	Route::get('/users', 'UserController@index');
	Route::get('/add_user', 'UserController@create');
	Route::post('/save_user', 'UserController@save');

	Route::get('/edit_user/{id}', 'UserController@edit');
	Route::get('/delete_user/{id}', 'UserController@delete');

	Route::post('/update_user/{id}', 'UserController@update');

			
});