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

Route::group(array('domain' => 'resources.nuviewnutrition.com'), function()
{
    Route::get('/', 'NuviewController@getIndex');
    Route::get('/writing-a-post', 'NuviewController@getWritingAPost');
    Route::get('/social-media', 'NuviewController@getSocialMedia');
    Route::get('/dos-and-donts', 'NuviewController@getDosAndDonts');
});

Route::get('/', function () {
    return view('welcome');
});

if (App::environment('local')) {
    Route::get('/nuviewnutrition', 'NuviewController@getIndex');
    Route::get('/nuviewnutrition/writing-a-post', 'NuviewController@getWritingAPost');
    Route::get('/nuviewnutrition/social-media', 'NuviewController@getSocialMedia');
    Route::get('/nuviewnutrition/dos-and-donts', 'NuviewController@getDosAndDonts');
}
