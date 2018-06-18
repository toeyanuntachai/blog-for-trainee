<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        //hello
        // hi
        $posts = Post::with('category')->get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        Post::create($request->only(['title', 'body', 'category_id']));

        return redirect()->route('posts.create')->withSuccess('สร้างโพสเรียบร้อย');
    }

    public function edit(Post $post)
    {
        $categories = Category::all();

        return view('posts.edit', compact('post', 'categories'));
    }

    public function update(Post $post, Request $request)
    {
        $post->update([
            'title' => $request->title,
            'body' => $request->body,
            'category_id' => $request->category_id
        ]);

        return redirect()->back()->withSuccess('แก้ไขเรียบร้อย');
    }

    public function destroy(Post $post)
    {
        //hello git  123
        $post->delete();

        return redirect()->route('posts.list')->withSuccess('ลบโพสเรียบร้อย');
    }
}
