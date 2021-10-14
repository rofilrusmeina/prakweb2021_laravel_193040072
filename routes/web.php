<?php

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
    return view('home', [
        "title" => "Home"
    ]); 
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Rofil Rusmeina",
        "email" => "ropilll25@gmail.com",
        "image" => "193040072.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rofil Rusmeina",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, animi aspernatur. Necessitatibus eos nostrum architecto quibusdam sed suscipit quasi reprehenderit maxime doloribus non aspernatur ipsa sequi, laboriosam unde quos saepe. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum qui officia culpa quasi saepe, eos numquam, error recusandae doloribus fugit quos! Voluptatum deleniti corrupti maiores animi eligendi quidem, explicabo quisquam."
        ],
        [
            "title" => "Judul post Kedua",
            "slug" => "judul-post-keedua",
            "author" => "Doddy Ferdiansyah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, animi aspernatur. Necessitatibus eos nostrum architecto quibusdam sed suscipit quasi reprehenderit maxime doloribus non aspernatur ipsa sequi, laboriosam unde quos saepe. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum qui officia culpa quasi saepe, eos numquam, error recusandae doloribus fugit quos! Voluptatum deleniti corrupti maiores animi eligendi quidem, explicabo quisquam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum qui officia culpa quasi saepe, eos numquam, error recusandae doloribus fugit quos! Voluptatum deleniti corrupti maiores animi eligendi quidem, explicabo quisquam."
        ]
        ];
    return view('posts', [
        "title" => "posts",
        "posts" => $blog_posts
    ]);
}); 


// Halaman single post

Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rofil Rusmeina",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, animi aspernatur. Necessitatibus eos nostrum architecto quibusdam sed suscipit quasi reprehenderit maxime doloribus non aspernatur ipsa sequi, laboriosam unde quos saepe. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum qui officia culpa quasi saepe, eos numquam, error recusandae doloribus fugit quos! Voluptatum deleniti corrupti maiores animi eligendi quidem, explicabo quisquam."
        ],
        [
            "title" => "Judul post Kedua",
            "slug" => "judul-post-keedua",
            "author" => "Doddy Ferdiansyah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, animi aspernatur. Necessitatibus eos nostrum architecto quibusdam sed suscipit quasi reprehenderit maxime doloribus non aspernatur ipsa sequi, laboriosam unde quos saepe. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum qui officia culpa quasi saepe, eos numquam, error recusandae doloribus fugit quos! Voluptatum deleniti corrupti maiores animi eligendi quidem, explicabo quisquam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum qui officia culpa quasi saepe, eos numquam, error recusandae doloribus fugit quos! Voluptatum deleniti corrupti maiores animi eligendi quidem, explicabo quisquam."
        ]
        ];

        $new_post = [];
        foreach($blog_posts as $post) {
            if($post["slug"] === $slug) {
                $new_post = $post;
            }
        }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});