<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Messages;
use App\Models\Post;


class Dashboard extends Controller
{
/*
|--------------------------------------------------------------------------
| Admin/DashboardController
|--------------------------------------------------------------------------
*/
    public function __construct()
{
    $this->middleware('auth');
    $this->middleware('gate');
}
/*
|--------------------------------------------------------------------------
*/
    public function index (){
        $posts=Post::orderBy('created_at', 'desc')->paginate(20);
        return view('admin.post.index' ,compact('posts') );
    }
/*
|--------------------------------------------------------------------------
*/
    public function messages (){
        $messages=Messages::orderBy('created_at', 'desc')->paginate(20);
        return view('admin/messages/index',compact('messages'));
    }
/*
|--------------------------------------------------------------------------
*/
public function messagesDestroy($id){
    $messages = Messages::findOrFail($id);
    $messages->delete($id);
    return redirect()->route('dashboard.messages');

}
/*
|--------------------------------------------------------------------------
*/
}

