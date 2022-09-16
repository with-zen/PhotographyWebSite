<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
|--------------------------------------------------------------------------
| dashboard RESOURCE routes
|--------------------------------------------------------------------------
*/
Route::resource('dashboard/post',App\Http\Controllers\Admin\PostController::class);
Route::resource('dashboard/profile',App\Http\Controllers\Admin\ProfileController::class);
Route::resource('dashboard/comment',App\Http\Controllers\Admin\CommentController::class);
/*
|--------------------------------------------------------------------------
| dashboard GET routes
|--------------------------------------------------------------------------
*/
Route::get('dashboard' , [App\Http\Controllers\Admin\Dashboard::class , 'index'])->name('dashboard.index');
Route::get('dashboard/messages' , [App\Http\Controllers\Admin\Dashboard::class , 'messages'])->name('dashboard.messages');
Route::delete('dashboard/messages/{id}' , [App\Http\Controllers\Admin\Dashboard::class , 'messagesDestroy'])->name('message.destroy');
/*
|--------------------------------------------------------------------------
*/

/*
message.destroy
|--------------------------------------------------------------------------
| client RESOURCE routes
|--------------------------------------------------------------------------
*/
Route::resource('messages',App\Http\Controllers\Client\MessagesController::class);
/*
|--------------------------------------------------------------------------
| client GET routes
|--------------------------------------------------------------------------
*/
Route::get('/' , [App\Http\Controllers\Client\IndexController::class , 'index'])->name('index.index');
Route::get('/posts/{post}',[App\Http\Controllers\Client\IndexController::class , 'show'] );
Route::get('profile' , [App\Http\Controllers\Client\ProfileController::class , 'index'])->name('profile.index');
/*
|--------------------------------------------------------------------------
*/
Route::post('comments' , [App\Http\Controllers\Client\IndexController::class , 'comments'])->name('comments.send');
/*
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| auth GET routes
|--------------------------------------------------------------------------
*/
Route::get('/auth/redirect',[App\Http\Controllers\Auth\GitHubAuthController::class , 'redirect'])->name('github.auth');
/*
|--------------------------------------------------------------------------
*/
Route::get('auth/github/callback',[App\Http\Controllers\Auth\GitHubAuthController::class , 'callback']);
/*
|--------------------------------------------------------------------------
*/
Auth::routes();
/*
|--------------------------------------------------------------------------
*/

