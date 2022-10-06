<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        return view('category', [
            'title' => "Post by Category : $category->slug",
            'category' => $category->name,
            'kosts' => $category->kosts->load('category','user')
        ]);
    }

    public function indek()
    {
        return view('categories', [
            'title' => "Post Categories",
            'categories' => Category::all()
        ]);
    }

    // public function kategory()
    // {
    //     return view('category.index', [
    //         'categories' => Category::all(),
    //     ]);
    // }
}
