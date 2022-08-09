<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
        'title' => 'Judul Pertama',
        'slug' => 'judul-pertama',
        'author' => 'Ading',
        'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque sunt et iste dolores fugit commodi repellat necessitatibus eum assumenda magni pariatur alias accusamus hic exercitationem cum ad eaque incidunt voluptate, sit nemo libero itaque deserunt voluptatum officiis? Porro doloremque ea voluptatum incidunt! Deleniti id quidem laudantium, unde iste incidunt tempora repellendus assumenda quasi in nesciunt error quibusdam adipisci eum aperiam accusamus sequi ipsam necessitatibus consequuntur aut? Reprehenderit voluptas, eius natus et libero sint labore error ducimus fugiat voluptatibus eaque quam. Consequuntur, inventore. Et, error ullam porro non, similique eveniet ad necessitatibus voluptatibus aspernatur iusto odio fuga blanditiis doloribus repudiandae distinctio!'

        ],
    [
        'title' => 'Judul Dua',
        'slug' => 'judul-dua',
        'author' => 'Hanafi',
        'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque sunt et iste dolores fugit commodi repellat necessitatibus eum assumenda magni pariatur alias accusamus hic exercitationem cum ad eaque incidunt voluptate, sit nemo libero itaque deserunt voluptatum officiis? Porro doloremque ea voluptatum incidunt! Deleniti id quidem laudantium, unde iste incidunt tempora repellendus assumenda quasi in nesciunt error quibusdam adipisci eum aperiam accusamus sequi ipsam necessitatibus consequuntur aut? Reprehenderit voluptas, eius natus et libero sint labore error ducimus fugiat voluptatibus eaque quam. Consequuntur, inventore. Et, error ullam porro non, similique eveniet ad necessitatibus voluptatibus aspernatur iusto odio fuga blanditiis doloribus repudiandae distinctio!'

    ],
];
    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
