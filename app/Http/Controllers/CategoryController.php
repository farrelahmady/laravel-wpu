<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories', [
            "title" => "Category",
            "active" => 'categories',
            "categories" => Category::all()
        ]);
    }
    public function show(Category $category)
    {
        return view('posts', [
            "title" => "Category : $category->name",
            "active" => 'blog',
            "posts" => $category->posts->load('category', 'author')
        ]);
    }
}
