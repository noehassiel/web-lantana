<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Post;

use App\Models\Project;

class FrontController extends Controller
{
    public function index()
    {
        $banners = Banner::where('is_active', true)->get();
        $projects = Project::where('is_active', true)->orderBy('created_at', 'asc')->take(6);
        $posts = Post::where('is_publish', true)->orderBy('created_at', 'asc')->take(6);

        return view('front.index')
            ->with('banners', $banners)
            ->with('projects', $projects)
            ->with('posts', $posts);
    }

    public function about()
    {
        return view('front.about');
    }
}