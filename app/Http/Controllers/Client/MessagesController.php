<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Messages;
use App\Models\User;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
/*
|--------------------------------------------------------------------------
| Client/MessagesController
|--------------------------------------------------------------------------
*/
    public function index(User $user)
    {
        return view('client.messages.index' ,compact('user') );
    }
/*
|--------------------------------------------------------------------------
*/
    public function store(Request $request)
    {
        $data =  $request->validate([
            'name'=>['required','string','max:255'],
            'email'=> ['required','email'],
             'text'=>['required','string',],
         ]);
         Messages::create($data);
         return redirect()->route('profile.index');
    }
/*
|--------------------------------------------------------------------------
*/
}
