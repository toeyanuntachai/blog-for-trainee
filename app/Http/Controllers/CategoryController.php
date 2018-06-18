<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }

    public function store(Request $request)
    {
        Category::create(['name' => $request->name]);

        return redirect()->back()->withSuccess('สร้างหมวดหมู่เรียบร้อน');
    }
}
