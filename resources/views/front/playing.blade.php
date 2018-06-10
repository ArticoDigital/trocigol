@extends('layouts.front')
@section('body') playing @endsection
@section('content')
    <div class="table-logo logo">
        <img src="{{asset('images/logo.png')}}" alt="">
    </div>
    <div data-token="{{Auth()->user()->api_token}}" class="gm4html5_div_class" id="gm4html5_div_id">
        <img src="html5game/splash.png" id="GM4HTML5_loadingscreen" alt="GameMaker:HTML5 loading screen"
             style="display:none;"/>
        <!-- Create the canvas element the game draws to -->
        <canvas id="canvas" width="1024" height="576">
            <p>Your browser doesn't support HTML5 canvas.</p>
        </canvas>
    </div>
	<div class=" row justify-center align-center complete"  >
        <img src="{{asset('images/loaderBack.png')}}" alt="">
        <div class="loader" id="loader">
            Cargando...
        </div>
    </div>
    @component('parts.menu',['back' => true]) @endcomponent
@endsection


