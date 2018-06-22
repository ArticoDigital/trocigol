<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameController extends Controller{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
        //Auth()->loginUsingId(1, true);

		$this->middleware( 'auth' );
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		return view( 'front.play' );
	}

	public function game() {
		return view( 'front.play' );
	}

	public function how() {
		return view( 'front.how' );
	}

	public function playing() {
		return view( 'front.playing' );
	}

	public function table() {
		$raw = "select users.`name`, scores.`game_id` as gameId , max(score) as maxscore
from scores
join games on scores.game_id = games.id
join users on users.id = games.`user_id`
GROUP BY  gameId order by maxscore desc limit 10";

        $scoresQuery = DB::table('scores')
            ->select(DB::raw('users.name, game.create_at as time users.avatar, scores.game_id as gameId , max(score) as maxscore'))
            ->join('games', 'scores.game_id', '=', 'games.id')
            ->join('users', 'users.id', '=', 'games.user_id')
            ->whereRaw('time > "2018-06-21"')
            ->groupBy('gameId')
            ->orderBy('maxscore', 'desc')
            ->limit(200)->get();
        $scoresByUser = $scoresQuery->groupBy('name');

        $scores = $scoresByUser->forPage(1, 10);
		return view( 'front.table', compact('scores'));
	}
}
