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

// Partials
Route::get('/navbar', function(){
    return view('partials.navbar');
});



// Pages

Route::get('/catalogue', 'PagesController@catalogue');
Route::get('/tentang', 'PagesController@about');
Route::get('/redaksi', 'PagesController@redaksi');
Route::get('/forum', 'PagesController@forum');
Route::get('/artikel', 'PagesController@article');
Route::get('/gerai', 'PagesController@shop');
Route::get('/kontak', 'PagesController@contact');
Route::get('/kontribusi', 'PagesController@contribution');
Route::get('/dashboard', 'PagesController@dashboard');


Route::get('/index', 'PagesController@index' );
Route::get('/welcome', 'PagesController@welcome' );

Route::get('/', 'PagesController@default');
