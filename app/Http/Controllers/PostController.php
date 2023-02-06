<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        $posts = Post::get();

        return view('back.posts.index')
            ->with('posts', $posts)
            ->with('categories', $categories);
    }

    public function create()
    {
        return view('back.posts.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return view('back.posts.show');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
