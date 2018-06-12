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
            <a id="Login-face" href="{{ route('social.auth', 'facebook') }}"><img src="{{asset('images/face.png')}}"
                                                                                  alt=""></a>
            <div>
                <div class="row m-t-20 align-center">
                    <div  class="col-12">
                        <a target="_blank" href="{{asset('pdf/terminos.pdf')}}">
                            <img src="{{asset('images/condiciones.png')}}" alt="">
                        </a>
                        <a style="margin-top: 8px; display: block;" target="_blank" href="{{asset('pdf/politica_datos.pdf')}}">
                            <img src="{{asset('images/politica_datos.png')}}" alt="">
                        </a>
                    </div>
                    <div class="col-4">
                        <input type="checkbox" id="check1"> <label for="check1"></label>
                    </div>
                </div>
            </div>
        </div>
        <div class="Logotipo" id="Logotipo">
            <img src="{{asset('images/logotipo.png')}}" alt="">
        </div>
    </main>
@endsection