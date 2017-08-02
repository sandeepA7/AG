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
    $countries = DB::table('countries')->select('id', 'country_name')->orderBy("country_name")->get();
    return view('home', ['countries' => $countries]);

});


Route::auth();

Route::get('/home', 'HomeController@index');

//OTP 
Route::get('verify/{user_id}', 'Auth\AuthController@userVerification');
Route::get('confirm/{user_id}', function () {
    return view('confirm');
});
Route::post('confirmation', 'Auth\AuthController@userConfirmation');

//Nominee
Route::get('nominee/{username}', function () {
    return view('nominee');
});
Route::get('register-nominee/{user_id}', function () {

	$countries = DB::table('countries')->select('id', 'country_name')->orderBy("country_name")->get();
    return view('register-nominee', ['countries' => $countries]);
});
Route::post('/register-nominee', 'Auth\AuthController@registerNominee');


// View album photos
Route::get('album/my-album/{slug}','AlbumController@my_album');

Route::get('/album', 'AlbumController@dashboard');
Route::get('/album/dashboard', 'AlbumController@dashboard');
Route::post('/album/albummainimage', 'AlbumController@albumMainImage');
Route::post('/album/multiple_upload', 'AlbumController@multiple_upload');
Route::post('/album/save_album', 'AlbumController@save_album');
Route::get('/album/settings', 'AlbumController@settings');
Route::get('/album/create-album', 'AlbumController@create_album');
Route::get('/album/shared-album', 'AlbumController@shared_album');
Route::get('/album/fav-album', 'AlbumController@favourite_album');


/*Service API for devices*/
Route::get('/api/country', 'Auth\AuthController@countryList');
Route::post('/api/register', 'Auth\AuthController@registerService');