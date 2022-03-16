<?php

namespace App\Models;


class Post
{
    private static $posts = [
        [
            "title" =>  "First Post",
            "slug" => "first-post",
            "author" => "Farrel Ahmad Yudithia",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur vero earum voluptate dignissimos dolores nemo tempore nam repellat laborum tenetur, architecto similique corrupti aliquam repellendus libero veritatis. Incidunt, laudantium quisquam!"
        ],
        [
            "title" =>  "Second Post",
            "slug" => "second-post",
            "author" => "JinxPro Pepeng",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet veniam voluptate nobis quos ea! Odit vero unde incidunt provident ut nesciunt quas molestias, sapiente, quia laudantium dolores, veritatis harum! Dolorum corporis accusamus ad exercitationem esse, eaque, commodi quis labore eveniet, corrupti nisi distinctio totam soluta consequuntur illum dolore facilis ipsam excepturi possimus velit. Quibusdam, consectetur ratione. Voluptatum, esse dolore accusantium recusandae itaque dicta amet ea harum quia accusamus beatae error natus vero minus qui culpa quae fugiat nesciunt quam. Iure, architecto! Fugit dignissimos, iste exercitationem possimus autem ut ea blanditiis! Excepturi ex minima in placeat perferendis reprehenderit sapiente sunt quibusdam!"
        ]
    ];

    public static function all()
    {
        return collect(self::$posts);
    }

    public static function find($slug)
    {
        $post = static::all();

        return $post->firstWhere('slug', $slug);
    }
}
