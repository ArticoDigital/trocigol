<?php


Route::get('/', function () {
    return view('front.home');
})->name('home')->middleware('isHomeAuth');

Auth::routes();

Route::get('auth/{provider}', 'Auth\SocialAuthController@redirectToProvider')->name('social.auth');
Route::get('auth/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');
Route::get('jugar', 'GameController@index')->name('play');
Route::get('juego', 'GameController@game')->name('play');
Route::get('como-jugar', 'GameController@how')->name('play');
Route::get('tabla-posiciones', 'GameController@table')->name('play');
