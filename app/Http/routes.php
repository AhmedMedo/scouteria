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

Route::get('/','WelcomeController@index');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('/auth/facebook',['as'=>'facebooklogin','uses'=>'WelcomeController@redirectToFaceBookProvider']);
Route::get('/callback','WelcomeController@HandelFaceBookProviderCallback');


Route::get('/auth/google',['as'=>'googlelogin','uses'=>'WelcomeController@redirectToGoogleProvider']);
Route::get('/oauth2callback','WelcomeController@HandelGoogleProviderCallback');


Route::get('/auth/linkedin',['as'=>'linkedin','uses'=>'WelcomeController@redirectToLinkedinProvider']);
Route::get('/linkedin/callback','WelcomeController@HandelLinkedinProviderCallback');



Route::get('/auth/twitter',['as'=>'twitter','uses'=>'WelcomeController@redirectToTwitterProvider']);
Route::get('/twitter/callback','WelcomeController@HandelTwitterProviderCallback');
