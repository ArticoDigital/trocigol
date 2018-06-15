<?php


Route::get('/', function () {
    return view('front.home');
})->name('home')->middleware('isHomeAuth');

Auth::routes();

Route::get('auth/{provider}', 'Auth\SocialAuthController@redirectToProvider')->name('social.auth');
Route::get('auth/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');
Route::get('cerrar-sesion', 'Auth\SocialAuthController@logout');

Route::get('jugar', 'GameController@index')->name('play');
Route::get('juego', 'GameController@game')->name('game');
Route::get('como-jugar', 'GameController@how')->name('howGame');
Route::get('tabla-posiciones', 'GameController@table')->name('table');
Route::get('jugando','GameController@playing')->name('playing');
Route::get('tabla-posiciones','GameController@table')->name('table');


Route::get('e', function (){
    return view('errors.error');
});

