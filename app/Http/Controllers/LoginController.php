<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();
        
        if (User::where('email', $user->email)->exists()) {
            $user = User::where('email', $user->email)->first();
            Auth::login($user);
        }
        else {
            $user = User::create([
                'google_id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'password' => Hash::make('password'),
                'google_token' => $user->token,
                'google_refresh_token' => $user->refreshToken,
            ]);
            Auth::login($user);
        }
        return  redirect('dashboard');
    }

    public function logOut()
    {
        Auth::logout();
        return redirect('/');
    }
}
