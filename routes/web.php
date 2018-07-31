<?php

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('front.home1');
})->name('home')->middleware('isHomeAuth');

Route::get('/admon-user', function () {
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
Route::get('jugando', 'GameController@playing')->name('playing');
Route::get('tabla-posiciones', 'GameController@table')->name('table');

Route::get('reporte', 'AdminController@index')->name('usersReport');
Route::get('reporte/busqueda', 'AdminController@search')->name('gamesUserSearch');
Route::get('reporte/juegos/{user}', 'AdminController@gamesUser')->name('gamesUserReport');
Route::get('reporte/juegos/{user}/{game}', 'AdminController@gamesLevel')->name('gamesUserLevel');

Route::get('userAllExcel', 'AdminController@userAllExcel')->name('userAllExcel');




