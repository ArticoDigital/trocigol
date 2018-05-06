@extends('layouts.front')
@section('content')
    <main class="Home row" id="Home">
        <div class="logo">
            <img src="{{asset('images/logo.png')}}" alt="">
        </div>
        <div class="Player" id="Player">
            <img src="{{asset('images/chefrito.png')}}" alt="">
        </div>
        <div class="Face" id="Face">
            <a href="{{ route('social.auth', 'facebook') }}"><img src="{{asset('images/face.png')}}" alt=""></a>
        </div>
        <div class="Logotipo" id="Logotipo">
            <img src="{{asset('images/logotipo.png')}}" alt="">
        </div>
    </main>
@endsection