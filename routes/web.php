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


Route::group(['middleware', ['auth'], 'namespace' => 'Admin' , 'prefix' => 'admin' ], function(){
	

	Route::get('dashboard', 'DashboardController@dashboard')->name('admin/dashboard');
	

});








Route::get('/boloes', 'Boloes\BolaoController@index')->name('boloes');

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

