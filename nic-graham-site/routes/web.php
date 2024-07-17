<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/Old-Site', function () {
    return view('Old-Site');
});
Route::get('/blogs', function () {
    return view('placeholder');
});
Route::get('/projects', function () {
    return view('placeholder');
});

Route::get('/in-progress', function () {
    return view('placeholder');
});
Route::get('/contact', function () {
    return view('placeholder');
});

Route::get('/puter', function () {
    return view('placeholder');
});

Route::get('/posts', function () {
    return view('posts');
});

Route::get('posts/{post}', function ($slug) {
    $path = __DIR__ . "/../resources/posts/{$slug}.html";

    if (! file_exists($path)) {
        return redirect('/');
    }

    $post = cache()->remember("posts.{$slug}", 1200, function () use ($path) {
        return file_get_contents($path);

    });

    return view('post', [
        'post' => $post
    ]);
})->where('post', '[A-z_\-]+');
