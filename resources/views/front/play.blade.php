@extends('layouts.front')
@section('content')
    @component('parts.menu',['audio' => true]) @endcomponent
    <main class="Play row" id="Play">
        <div class="Play-content">
            <div class="Play-game is-text-center">
                <a href="{{ route('playing') }}">
                    <img src="{{asset('images/jugar.png')}}" alt="">
                </a>
            </div>
            <div class="row ">
                <div class="Play-how align-center" id="Play-how">
                    <a href="{{route('howGame')}}">
                        <img src="{{asset('images/como_jugar.png')}}" alt="">
                    </a>
                </div>
                <div class="Play-table" id="Play-table">
                    <a href="{{route('table')}}">
                        <img src="{{asset('images/tabla_posiciones.png')}}" alt="">
                    </a>
                </div>
            </div>
        </div>

    </main>
@endsection