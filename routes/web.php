<?php

use App\Models\Category;
use App\Models\Post;
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

Route::get('/', function () {
    \Illuminate\Support\Facades\DB::listen(function($query){
        \Illuminate\Support\Facades\Log::info($query->sql, $query->bindings);
//        logger($query->sql);
    });
    return view('welcome',[
        'posts' => Post::with('category')->get()
    ]);
});

Route::get('/posts/{post:slug}', function(Post $post){ //Post::where('slug', $post)->firstOrFail();
    return view('post',[
        'post' => $post
    ]);
});

Route::get('/categories/{category}', function(Category $category){
    return view('welcome', [
        'posts' => $category->posts
    ]);
});
