@extends('layouts.front')
@section('content')
    <main class="How row" id="How">
        <figure id="Error">
            <a href="{{url('/')}}">
                <img src="{{asset('images/ups.png')}}" alt="">
            </a>
        </figure>
    </main>
@endsection

@section('gtag')
    <script>
        gtag('event', 'exception', {
            'description': 'error login',
            'fatal': false
        });

    </script>
@endsection