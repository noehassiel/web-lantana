<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Banner;
use App\Models\Project;

use App\Models\LegalText;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $banners = Banner::where('is_active', true)->orderBy('priority', 'asc')->get();
        $projects = Project::where('is_active', true)->orderBy('created_at', 'asc')->get()->take(6);
        $posts = Post::where('is_publish', true)->orderBy('created_at', 'asc')->get()->take(6);

        return view('front.index')
            ->with('banners', $banners)
            ->with('projects', $projects)
            ->with('posts', $posts);
    }

    public function about()
    {
        return view('front.about');
    }

    public function detail($slug)
    {
        $project = Project::where('slug', $slug);

        return view('front.detail_lesson')
            ->with('project', $project);
    }

    public function legalText($slug)
    {
        $text = LegalText::where('slug', $slug)->first();

        $legales = LegalText::get();

        $projects = Project::take(5)->orderBy('created_at', 'asc')->where('is_active', 1)->get();

        return view('front.privacy')
            ->with('text', $text)
            ->with('projects', $projects)
            ->with('legales', $legales);
    }
}
