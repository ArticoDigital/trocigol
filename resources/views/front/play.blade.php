@extends('layouts.front')
@section('content')
    <main class="Play row" id="Play">
        <div class="Play-content">
            <div class="Play-game is-text-center">
                <img src="{{asset('images/jugar.png')}}" alt="">
            </div>
            <div class="row ">
                <div class="Play-how align-center" id="Play-how">
                    <img src="{{asset('images/como_jugar.png')}}" alt="">
                </div>
                <div class="Play-table" id="Play-table">
                    <img src="{{asset('images/tabla_posiciones.png')}}" alt="">
                </div>
            </div>
        </div>

    </main>
@endsection