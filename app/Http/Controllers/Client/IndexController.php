<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class IndexController extends Controller
{
/*
|--------------------------------------------------------------------------
| Client/IndexController
|--------------------------------------------------------------------------
*/



    public function index(User $user){
        $posts=Post::orderBy('created_at', 'desc')->paginate(9);


        return view('index',compact('posts' ,'user'));
 // The quick brown fox...
    }
/*
|--------------------------------------------------------------------------
*/
    public function show($id ,User $user)
    {

        $post=Post::findOrFail($id);
        $posts=$post->comments()->where('approvd' , 1)->paginate(10);
        return view('client.index' ,compact('post','user','posts') );
    }
/*
|--------------------------------------------------------------------------
*/
public function comments(Request $request){
    $validData = $request->validate([
        'commentable_id' => 'required',
        'commentable_type' => 'required',
        'parent_id' => 'required',
        'comment' => 'required'
    ]);
    auth()->user()->comments()->create($validData);
    return back();
}
/*
|--------------------------------------------------------------------------
*/
}
