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

Route::get('/', function () {
        $available_times = DB::table('available_times')->get();
        return $available_times;
});

Route::get('logout/', 'PostsController@logout'); //to add route to logout method
Route::get('index', 'PostsController@index');
Route::get('gallery', 'PostsController@gallery');
Route::get('dashboard', 'PostsController@dashboard');
Route::get('login2', 'PostsController@login2');
Route::get('adminnav', 'PostsController@adminnav');
Route::get('barbers', 'PostsController@barbers');
Route::get('editbooking', 'PostsController@editbooking');
Route::get('BBarbers', 'PostsController@BBarbers');
Route::get('confirm', 'PostsController@confirm');
Route::get('services', 'PostsController@services');
Route::get('Times', 'PostsController@Times');

Route::get('login2', ['as' => 'login2', 'uses' => 'Auth\LoginController@create']);




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/createbarber', 'BarberController@create');
Route::post('/datesubmit', 'PostsController@barbers');
Route::post('edit_times', 'PostsController@edit_times');
Route::post('update_time', 'PostsController@update_time');
Route::post('delete_time', 'PostsController@delete_time');
