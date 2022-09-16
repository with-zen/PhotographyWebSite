<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class GitHubAuthController extends Controller
{
    /*
|--------------------------------------------------------------------------
| Auth/GitHubAuthController
|--------------------------------------------------------------------------
*/
    public function redirect(){
        return Socialite::driver('github')->redirect();
    }
/*
|--------------------------------------------------------------------------
*/
    public function callback(){
    // $user->token
    try {
        $githubUser = Socialite::driver('github')->user();
        $user = User::where('email' , $githubUser->email)->first();

        if($user) {
            auth()->loginUsingId($user->id);
        } else {
            $newUser = User::create([
                'name' => $githubUser->name,
                'email' => $githubUser->email,
                'password' => bcrypt(\Str::random(16)),
            ]);

            auth()->loginUsingId($newUser->id);
        }

        return redirect('/');
    } catch (\Exception $e) {
        //TODO show Error Message
        return 'error';
    };
    }

    /*
|--------------------------------------------------------------------------
*/
}
