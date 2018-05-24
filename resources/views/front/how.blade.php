@extends('layouts.front')
@section('content')
	<main class="How row justify-center align-end" id="How">
		<figure class="back-coach">
			<a href="{{url('jugar')}}">
				<img src="{{asset('images/back.png')}}" alt="">
			</a>
		</figure>
		<figure class="How-title">
			<img src="{{asset('images/como-jugar-text.png')}}" alt="">
		</figure>
		<figure id="Coach">

			<img src="{{asset('images/como-jugar.png')}}" alt="">

		</figure>
	</main>
@endsection