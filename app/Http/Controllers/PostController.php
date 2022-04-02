<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        // dd(request('category'));
        $title = '';
        if (request('category')) {
            $title = Category::firstWhere('slug', request('category'))->name;
        }

        if (request('author')) {
            $title = User::firstWhere('username', request('author'))->name . "'s";
        }

        return view('posts', [
            "title" => "All " . $title . " Articles",
            "active" => 'blog',
            // "posts" => Post::all()
            "posts" => Post::latest()->search(request(['search', 'category', 'author']))->paginate(4)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        // return $post;
        return view('post', [
            "title" => $post['title'],
            "active" => 'blog',
            "post" => $post
        ]);
    }
}
