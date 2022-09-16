<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /*
|--------------------------------------------------------------------------
| Admin/CommentController
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
        $comments=Comment::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.comments.index',compact('comments'));
    }
/*
|--------------------------------------------------------------------------
*/
    public function edit($id)
    {
        $comments=Comment::findOrFail($id);

        return view('admin.comments.edit',compact('comments'));
    }
/*
|--------------------------------------------------------------------------
*/
    public function update(Request $request, $id)
    {
        $comment=Comment::findOrFail($id);

            $validData = $request->validate([
                'commentable_id' => 'required',
                'commentable_type' => 'required',
                'parent_id' => 'required',
                'comment' => 'required',
                'approvd'=>'required'
            ]);

            $comment->update($validData);
            return redirect()->route('comment.index');
    }

 /*
|--------------------------------------------------------------------------
*/
    public function destroy($id)
    {
        $comment = comment::findOrFail($id);
        $comment->delete($id);
        return redirect()->route('comment.index');
    }
    /*
|--------------------------------------------------------------------------
*/
}
