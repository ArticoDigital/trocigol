<?php

namespace App\Http\Controllers\Auth;

use App\Customer;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Socialite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SocialAuthController extends Controller{
	public function redirectToProvider( $provider ) {
		return Socialite::driver( $provider )->redirect();
	}

	public function handleProviderCallback( $provider ) {

		$social_user = Socialite::driver( $provider )->user();

		if ( $user = User::where( 'email', $social_user->email )->first() ) {
			Session::put( 'TokenUser', $user->createToken( 'trocigol' )->accessToken );
			return $this->authAndRedirect( $user );
		} else {

			$user = User::create( [
				'name'   => $social_user->name,
				'email'  => $social_user->email,
				'avatar' => $social_user->avatar,
			] );
			Session::put( 'TokenUser', $user->createToken( 'trocigol' )->accessToken );

			return $this->authAndRedirect( $user );
		}
	}

	public function logout() {
		Auth::logout();
		return redirect()->to( '/' );
	}

	public function authAndRedirect( $user ) {
		Auth::login( $user );

		return redirect()->to( '/jugar' );
	}
}