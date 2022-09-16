<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
/*
|--------------------------------------------------------------------------
| Client/ProfileController
|--------------------------------------------------------------------------
*/
    public function index(User $user){
        $profiles=Profile::all();
        return view('client.profile.index',compact('profiles','user'));
    }
/*
|--------------------------------------------------------------------------
*/
}
