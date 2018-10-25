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

use App\Models\Photo;


/*Route::get('/', function () {
    
    $photos = Photo::all();

    return view('welcome', compact('photos'));
});*/


Route::get('/', function(){ 
    return view('welcome');
});

Route::get('/lang/{lang?}', function($lang=NULL){
    App::setLocale($lang);
    return view('welcome');
})->name('lang');



Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('photos', 'PhotoController');

Route::resource('posts', 'PostController');