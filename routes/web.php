<?php

use Illuminate\Support\Facades\Route;

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
/*Route Frontend*/
Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/about', 'FrontendController@about');

Route::get('/service', 'FrontendController@service');

Route::get('/modeldepan', 'FrontendController@portofolio');


/*Route backend*/
Route::get('login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout','AuthController@logout');


Route::group(['middleware'=>'auth'], function(){
	Route::get('/dashboard', 'DashboardController@index');

	Route::get('/grafikmodel', 'GrafikController@index');

	// Data Harian
	Route::get('/harian', 'HarianController@harian');
	Route::post('/harian/create', 'HarianController@create');
	Route::get('/harian/{id}/edit', 'HarianController@edit');
	Route::post('/harian/{id}/update', 'HarianController@update');
	Route::get('/harian/{id}/delete', 'HarianController@delete');

	// Data Kumulatif
	Route::get('/kumulatif', 'KumulatifController@kumulatif');
	Route::post('/kumulatif/create', 'KumulatifController@create');
	Route::get('/kumulatif/{id}/edit', 'KumulatifController@edit');
	Route::post('/kumulatif/{id}/update', 'KumulatifController@update');
	Route::get('/kumulatif/{id}/delete', 'KumulatifController@delete');

	//Data Model
	Route::get('/model', 'ModelController@model');
	Route::post('/model/create', 'ModelController@create');
	Route::get('/model/{id}/edit', 'ModelController@edit');
	Route::post('/model/{id}/update', 'ModelController@update');
	Route::get('/model/{id}/delete', 'ModelController@delete');

	//Data Model
	Route::get('/perbandingan', 'PerbandinganController@perbandingan');
	Route::post('/perbandingan/create', 'PerbandinganController@create');
	Route::get('/perbandingan/{id}/edit', 'PerbandinganController@edit');
	Route::post('/perbandingan/{id}/update', 'PerbandinganController@update');
	Route::get('/perbandingan/{id}/delete', 'PerbandinganController@delete');
}
);



