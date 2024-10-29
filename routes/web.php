<?php

use App\Models\Category;
use Illuminate\Support\Arr;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', ['name' => 'Miftah Fauzi', 'title' => 'About']);
});

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {
    return view('posts', ['title' => count($user->posts) . ' Articles by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', ['title' => 'Articles in: ' . $category->name, 'posts' => $category->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
