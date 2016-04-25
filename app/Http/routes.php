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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'web'], function () {

    Route::auth();

    Route::get('/', function(){
		if (!empty(Auth::user())) {
			if(Auth::user()->userAs == 1){
				return view ('seller/sellerHome');
			}else{
				return view('buyer/buyerHome');
			}
		}else{
			return view('welcome');
		}
	});

    Route::resource('sellerProfile', 'sellerController@index');

    Route::resource('produkTani', 'TaniController');

    Route::resource('produkTernak', 'TernakController');

    Route::resource('produkWisata', 'WisataController');

    Route::resource('produkVilla', 'VillaController');

    Route::resource('produkEdukasi', 'EdukasiController');

});

Route::get('userAs', ['middleware'=>['web','auth','userAs'], function(){
	return view('seller/merchant_home');
}]);
