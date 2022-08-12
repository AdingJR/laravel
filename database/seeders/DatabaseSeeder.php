<?php

namespace Database\Seeders;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('12345')
        ]);


        Category::create([
            'name' => 'Web Satu',
            'slug' => 'web-satu'
    ]);

        Category::create([
            'name' => 'Web Dua',
            'slug' => 'web-dua'
    ]);

        Post::create([
            'title' => 'Judul Satu',
            'slug' => 'judul-satu',
            'excerpt' => 'Ini Post Satu',
            'category_id' => 1,
            'user_id' => 1,
            'body' => 'ini adalah postingan pertama saya'
    ]);
    }

}
