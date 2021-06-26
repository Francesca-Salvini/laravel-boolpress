<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();

        $data = [
            'categories' => $categories
        ];

        return view('guest.categories.index', $data);
    }

    public function show($slug) {
        $category = Category::where('slug', '=', $slug)->first();

        if(!$category) {
            abort('404');
        }

        $data = [
            'category' => $category,
            'related_posts' => $category->posts
        ];


        return view('guest.categories.show', $data);

    }
}
