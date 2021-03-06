<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show(User $author)
    {
        return view('posts', [
            "title" => "Author by : $author->name",
            "active" => 'blog',
            "posts" => $author->posts->load('category', 'author')
        ]);
    }
}
