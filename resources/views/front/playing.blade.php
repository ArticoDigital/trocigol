@extends('layouts.front')
@section('body') playing @endsection
@section('content')
    <div class="table-logo logo">
        <img src="{{asset('images/logo.png')}}" alt="">
    </div>
    <div data-token="{{Session::get('TokenUser')}}" class="gm4html5_div_class" id="gm4html5_div_id">
        <img src="html5game/splash.png" id="GM4HTML5_loadingscreen" alt="GameMaker:HTML5 loading screen"
             style="display:none;"/>
        <!-- Create the canvas element the game draws to -->
        <canvas id="canvas" width="1024" height="576">
            <p>Your browser doesn't support HTML5 canvas.</p>
        </canvas>
    </div>
    <a class="table-back" href="{{route('play')}}">
        <img src="{{asset('images/back.png')}}" alt="">
    </a>
@section('script')
    <script type="text/javascript" src="html5game/trocipollo.js?JJYXB=32394876"></script>
    <script>window.onload = GameMaker_Init;</script>
@endsection

