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
      "name" => "Farrel Ahmad Yudithia",
      "email" => "farrelfay.ce@gmail.com",
      "image" => "farrel.webp"
   ]);
});

Route::get('/blog', function () {
   $posts = [
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
   return view('posts', [
      "title" => "Blog",
      "posts" => $posts
   ]);
});

// single post
Route::get('/blog/{slug}', function ($slug) {
   $posts = [
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

   $the_post = [];
   foreach ($posts as $post) {
      if ($post["slug"] === $slug) {
         $the_post = $post;
      }
   }
   return view('post', [
      "title" => $the_post["title"],
      "post" => $the_post
   ]);
});
