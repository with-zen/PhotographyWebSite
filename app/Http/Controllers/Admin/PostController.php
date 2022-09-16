<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
/*
|--------------------------------------------------------------------------
|  Admin/PostController
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
    public function index()
    {
        $posts=Post::orderBy('created_at', 'desc')->paginate(20);
        return view('admin.post.index' ,compact('posts') );
    }
/*
|--------------------------------------------------------------------------
*/
    public function create()
    {
        return view('admin.post.create');
    }
/*
|--------------------------------------------------------------------------
*/

    public function store(Request $request)
    {
        $data =  $request->validate([
            'title'=>['required','string','max:255'],
            'caption'=> ['required','string'],
             'tags'=>['required','string','max:255'],
            'image'=>['required']
         ]);
         Post::create($data);
         return redirect()->route('post.index');
    }
/*
|--------------------------------------------------------------------------
*/
    public function edit($id)
    {
        $posts=Post::findOrFail($id);
        return view('admin.post.edit' ,compact('posts') );
    }
/*
|--------------------------------------------------------------------------
*/
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $data =  $request->validate([
            'title'=>['required','string','max:255'],
            'caption'=> ['required','string'],
             'tags'=>['required','string','max:255'],
            'image'=>['required']
         ]);
         $post->update($data);
         return redirect()->route('post.index');
    }
/*
|--------------------------------------------------------------------------
*/
    public function destroy($id)
    {
        $post = post::findOrFail($id);
        $post->delete($id);
        return redirect()->route('post.index');
    }
}
