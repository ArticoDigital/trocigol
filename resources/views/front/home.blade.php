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
			<img src="{{asset('images/like_seguirnos.png')}}" alt="">
			<div class="fb-like" data-href="https://www.facebook.com/TrocipolloColombia/" data-width="400px"
				 data-layout="button" data-action="like" data-size="large" data-show-faces="false"
				 data-share="false"></div>
			<div id="fb-root"></div>
			<a id="Login-face" href="{{ route('social.auth', 'facebook') }}"><img src="{{asset('images/face.png')}}"
																				  alt=""></a>
			<div>
				<div class="row m-t-20 align-center">
					<div class="col-12">
						<a target="_blank" href="{{asset('pdf/terminos.pdf')}}">
							<img src="{{asset('images/condiciones.png')}}" alt="">
						</a>
					</div>
					<div class="col-4">
						<input type="checkbox" id="check1"> <label for="check1"></label>
					</div>
					<div class="col-12">

						<a style="margin-top: 8px; display: block;" target="_blank"
						   href="{{asset('pdf/politica_datos.pdf')}}">
							<img src="{{asset('images/politica_datos.png')}}" alt="">
						</a>
					</div>
					<div class="col-4">
						<input type="checkbox" id="check2"> <label for="check2"></label>
					</div>
				</div>
			</div>
		</div>
		<div class="Logotipo row align-center" id="Logotipo">
			<figure >
				<img src="{{asset('images/logotipo.png')}}" alt="">
			</figure>
			<figure>
				<img src="{{asset('images/tv.png')}}" alt="">
			</figure>
		</div>
		<figure class="tv">
			<img src="{{asset('images/tv.png')}}" alt="">
		</figure>
	</main>

@endsection
@section('script')
	<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.0&appId=184022595576366&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
@endsection