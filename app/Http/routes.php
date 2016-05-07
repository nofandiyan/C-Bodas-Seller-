<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::auth();

Route::group(['middleware' => 'web'], function () {

	Route::get('/', 'HomeController@index');

    Route::resource('sellerProfile', 'sellerController');

    Route::resource('produkTani', 'TaniController');

    Route::resource('produkTernak', 'TernakController');

    Route::resource('produkWisata', 'WisataController');

    Route::resource('produkVilla', 'VillaController');

    Route::resource('produkEdukasi', 'EdukasiController');

});
// Route::auth();

// Route::get('/home', 'HomeController@index');
