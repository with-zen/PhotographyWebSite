<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
/*
|--------------------------------------------------------------------------
| Admin/ProfileController
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
        return view('admin.profile.index');
    }
/*
|--------------------------------------------------------------------------
*/

    public function edit($id)
    {
        $profile=Profile::findOrFail($id);
        return view('admin.profile.edit',compact('profile'));
    }
/*
|--------------------------------------------------------------------------
*/
    public function update(Request $request, $id)
    {

        $profile = Profile::findOrFail($id);
        $data =  $request->validate([
            'name'=>['required','string','max:255'],
            'bio'=> ['required','string'],
             'telegram'=>['required','string','max:255'],
             'instagram'=>['required','string','max:255'],
             'facebook'=>['required','string','max:255'],
             'progressbar_1'=>['required','string','max:255'],
             'progressbar_2'=>['required','string','max:255'],
             'progressbar_3'=>['required','string','max:255'],
             'progressbar_4'=>['required','string','max:255'],
             'name_of_progressbar_1'=>['required','string','max:255'],
             'name_of_progressbar_2'=>['required','string','max:255'],
             'name_of_progressbar_3'=>['required','string','max:255'],
             'name_of_progressbar_4'=>['required','string','max:255'],
            'image'=>['required']

         ]);

         $profile->update($data);
         return redirect()->route('profile.index');
    }
/*
|--------------------------------------------------------------------------
*/

}
