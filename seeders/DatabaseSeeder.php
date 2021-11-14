<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Rofil Rusmeina',
            'email' => 'ropill25@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Naufal',
            'email' => 'naufal25@gmail.com',
            'password' => bcrypt('11111')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro animi eligendi suscipit. Hic accusantium quas cupiditate incidunt veritatis illo veniam voluptas dicta distinctio architecto. Rerum quibusdam dignissimos quidem ullam atque!',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro animi eligendi suscipit. Hic accusantium quas cupiditate incidunt veritatis illo veniam voluptas dicta distinctio architecto. Rerum quibusdam dignissimos quidem ullam atque!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro animi eligendi suscipit. Hic accusantium quas cupiditate incidunt veritatis illo veniam voluptas dicta distinctio architecto. Rerum quibusdam dignissimos quidem ullam atque!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro animi eligendi suscipit. Hic accusantium quas cupiditate incidunt veritatis illo veniam voluptas dicta distinctio architecto. Rerum quibusdam dignissimos quidem ullam atque!',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro animi eligendi suscipit. Hic accusantium quas cupiditate incidunt veritatis illo veniam voluptas dicta distinctio architecto. Rerum quibusdam dignissimos quidem ullam atque!',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro animi eligendi suscipit. Hic accusantium quas cupiditate incidunt veritatis illo veniam voluptas dicta distinctio architecto. Rerum quibusdam dignissimos quidem ullam atque!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro animi eligendi suscipit. Hic accusantium quas cupiditate incidunt veritatis illo veniam voluptas dicta distinctio architecto. Rerum quibusdam dignissimos quidem ullam atque!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro animi eligendi suscipit. Hic accusantium quas cupiditate incidunt veritatis illo veniam voluptas dicta distinctio architecto. Rerum quibusdam dignissimos quidem ullam atque!',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro animi eligendi suscipit. Hic accusantium quas cupiditate incidunt veritatis illo veniam voluptas dicta distinctio architecto. Rerum quibusdam dignissimos quidem ullam atque!',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro animi eligendi suscipit. Hic accusantium quas cupiditate incidunt veritatis illo veniam voluptas dicta distinctio architecto. Rerum quibusdam dignissimos quidem ullam atque!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro animi eligendi suscipit. Hic accusantium quas cupiditate incidunt veritatis illo veniam voluptas dicta distinctio architecto. Rerum quibusdam dignissimos quidem ullam atque!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro animi eligendi suscipit. Hic accusantium quas cupiditate incidunt veritatis illo veniam voluptas dicta distinctio architecto. Rerum quibusdam dignissimos quidem ullam atque!',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro animi eligendi suscipit. Hic accusantium quas cupiditate incidunt veritatis illo veniam voluptas dicta distinctio architecto. Rerum quibusdam dignissimos quidem ullam atque!',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro animi eligendi suscipit. Hic accusantium quas cupiditate incidunt veritatis illo veniam voluptas dicta distinctio architecto. Rerum quibusdam dignissimos quidem ullam atque!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro animi eligendi suscipit. Hic accusantium quas cupiditate incidunt veritatis illo veniam voluptas dicta distinctio architecto. Rerum quibusdam dignissimos quidem ullam atque!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro animi eligendi suscipit. Hic accusantium quas cupiditate incidunt veritatis illo veniam voluptas dicta distinctio architecto. Rerum quibusdam dignissimos quidem ullam atque!',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
