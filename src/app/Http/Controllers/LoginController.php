<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function github()
    {
        // Send the user's request to GitHub
        return Socialite::driver('github')->redirect();
    }


    public function githubCallback()
    {
        // Get oauth request back from Github
        $user = Socialite::driver('github')->user();

        $user = User::firstOrCreate([
            'email' => $user->getEmail()
        ], [
            'name' => $user->getNickname(),
            'fullname' => $user->getName(),
            'email' => $user->getEmail(),
            'password' => bcrypt($user->getId()),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);

        Auth::login($user, true);
        return redirect(route('home'));
    }
}
