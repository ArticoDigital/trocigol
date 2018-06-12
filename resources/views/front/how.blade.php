@extends('layouts.front')
@section('content')
	@component('parts.menu',['audio' => true, 'back' => true, 'close' => true]) @endcomponent
	<main class="How row" id="How">
		<figure class="back-coach">

		</figure>
		<figure class="How-title">
			<img src="{{asset('images/como-jugar-text.png')}}" alt="">
		</figure>
		<figure id="Coach">

			<img src="{{asset('images/como-jugar.png')}}" alt="">

		</figure>
	</main>
@endsection