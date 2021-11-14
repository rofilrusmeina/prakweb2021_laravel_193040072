<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
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


    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
