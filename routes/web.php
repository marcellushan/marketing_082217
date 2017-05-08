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
//    return view('welcome');
    echo "test";
});


Route::resource('clients', 'ClientsController');
Route::resource('press_releases', 'PressReleasesController');
Route::resource('design_printing', 'DesignPrintingController');
Route::resource('photography', 'PhotoController');
Route::resource('videography', 'VideoController');
Route::resource('presentation', 'PresentationController');
Route::resource('social_media', 'SocialMediaController');
Route::resource('paid_advertising', 'PaidAdvertisingController');

Route::get('service', 'ServiceController@index');