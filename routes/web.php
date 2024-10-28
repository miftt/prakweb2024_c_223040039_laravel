<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

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
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Miftah Fauzi',
            'body' =>  'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, unde debitis dolorem voluptatibus soluta perspiciatis exercitationem. Non ipsum modi sapiente.',
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Miftah Fauzi',
            'body' =>  'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto quas, ad sunt veritatis quisquam iure nulla ullam beatae quis!',
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Miftah Fauzi',
            'body' =>  'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat repellat ratione architecto error dignissimos neque et, suscipit quasi nemo. Beatae nisi est non eos?',
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Miftah Fauzi',
            'body' =>  'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid voluptate laborum architecto, sapiente aut dignissimos unde ducimus aliquam labore consectetur adipisci voluptatem, nisi quisquam doloribus?',
        ]
    ];
    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
