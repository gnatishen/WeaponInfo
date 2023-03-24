<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();

        // тут ви можете створити нового користувача або автентифікувати вже існуючого користувача
        // використовуючи інформацію про користувача, що повернула Google

        Auth::login($user);

        return redirect('/home');
    }

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();

        // тут ви можете створити нового користувача або автентифікувати вже існуючого користувача
        // використовуючи інформацію про користувача, що повернула Facebook

        Auth::login($user);

        return redirect('/home');
    }
}
