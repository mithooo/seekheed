<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Auth;

use App\User;

use Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


        // google
        public function redirectToProviderGoogle()
        {
            return Socialite::driver('google')->redirect();
        }

        /**
        * Obtain the user information from google.
        *
        * @return \Illuminate\Http\Response
        */

        public function handleProviderCallbackGoogle()
        {
            $user = Socialite::driver('google')->user();
            $findExisting = User::where('google_id', $user->id)->first();
            if($findExisting) {
                Auth::login($findExisting);
                return redirect()->route('home');
            }
            $user = User::create([
                'username' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'google_id' => $user->id,
                'email_verified_at' => time(),
                'password' => bcrypt("password"),
            ]);
            $user->markEmailAsVerified();
            Auth::login($user);
            return redirect()->route('home');
            // dd($user);

            // $user->token;
        }
        // end google

        public function redirectToProvider()
        {
            return Socialite::driver('facebook')->redirect();
        }

        /**
         * Obtain the user information from facebook.
         *
         * @return \Illuminate\Http\Response
         */
        public function handleProviderCallback()
        {
            $user = Socialite::driver('facebook')->user();

            $findExisting = User::where('facebook_id', $user->id)->first();
            if($findExisting) {
                Auth::login($findExisting);
                return redirect()->route('home');
            }
            $user = User::create([
                'username' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'facebook_id' => $user->id,
                'email_verified_at' => now(),
                'password' => bcrypt("password"),
            ]);
            $user->markEmailAsVerified();
            Auth::login($user);
            return redirect()->route('home');
            // dd($user);

            // $user->token;
        }

        public function logout()
        {
            Auth::logout();
            return redirect()->route('front.sign_in');
        }
}
