<?php

namespace App\Http\Controllers\api;

use App\Models\Game;
use App\Models\Score;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\api\BaseController as BaseController;
use Illuminate\Support\Facades\Auth;

class GameController extends BaseController{
	/**
	 * Display a listing of the resource.
	 *
	 * @return array
	 */
	public function index( Request $request ) {
		$game = Auth::user()->games()->create( [
			'shirt' => $request->input( 'shirt' ),
		] );

		return [ 'success' => true, 'idGame' => $game->id ];
	}

	public function insertScore( Request $request ) {
		$data= $request->all();
		$idGame = $data['game_id'];
		$game = Game::find($idGame);
		$game->scores()->create([
			'time' => '00:' . $data['min'] . ':' . $data['sec'],
			'level' => $data['level'],
			'score' => $data['score']
		]);

		return [ 'success' => true];
	}
}
