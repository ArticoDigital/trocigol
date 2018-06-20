<?php

use Illuminate\Support\Facades\Auth;

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
Route::get('jugando', 'GameController@playing')->name('playing');
Route::get('tabla-posiciones', 'GameController@table')->name('table');

Route::get('reporte', 'AdminController@index')->name('usersReport');
Route::get('reporte/busqueda', 'AdminController@search')->name('gamesUserSearch');
Route::get('reporte/juegos/{user}', 'AdminController@gamesUser')->name('gamesUserReport');

Route::get('userAllExcel', 'AdminController@userAllExcel')->name('userAllExcel');

Route::get('e', function () {

    $scoresQuery = DB::table('scores')
        ->select(DB::raw('users.name, users.avatar, scores.game_id as gameId , max(score) as maxscore'))
        ->join('games', 'scores.game_id', '=', 'games.id')
        ->join('users', 'users.id', '=', 'games.user_id')
        ->groupBy('gameId')
        ->orderBy('maxscore', 'desc')
        ->limit(200)->get();
    $scoresByUser = $scoresQuery->groupBy('name');
    $scores = $scoresByUser->forPage(1, 10);
    dd($scores);
});



