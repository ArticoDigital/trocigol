<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.play');
    }
    public function game()
    {
        return view('front.play');
    }
    public function how()
    {
        return view('front.how');
    }
    public function playing()
    {
        return view('front.playing');
    }
    public function table()
    {
        return view('front.table');
    }
}
