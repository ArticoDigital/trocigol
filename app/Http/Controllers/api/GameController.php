<?php

namespace App\Http\Controllers\api;

use App\Models\Game;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\api\BaseController as BaseController;
use Illuminate\Support\Facades\Auth;

class GameController extends BaseController{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {

		return Auth::user();

	}
	public function users() {

		return User::all()->first();

	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store( Request $request ) {
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\GameApi $gameApi
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function show( GameApi $gameApi ) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\GameApi $gameApi
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function edit( GameApi $gameApi ) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \App\Models\GameApi $gameApi
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function update( Request $request, GameApi $gameApi ) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\GameApi $gameApi
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy( GameApi $gameApi ) {
		//
	}
}
