<?php

use App\Http\Controllers\{
    PostController
};

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
Route::post('/posts', [PostController::Class, 'store'])->name('posts.store');
Route::get('/posts/create', [PostController::Class, 'create'])->name('posts.create');
Route::get('/posts', [PostController::Class, 'index'])->name('posts.index');

Route::get('/', function () {
    return view('welcome');
});
