<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use App\Models\Post;
use App\Models\Banner;
use App\Models\Project;

use App\Models\Category;
use App\Models\LegalText;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $today = Carbon::now()->format('Y-m-d');

        $banners = Banner::where('is_active', true)->orderBy('priority', 'asc')->get();
        $projects = Project::where('is_active', true)->orderBy('created_at', 'asc')->get()->take(6);
        $posts = Post::where('is_publish', true)->where('publish_date', '<=', $today)->orderBy('created_at', 'asc')->get()->take(6);

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
        $project = Project::where('slug', $slug)->first();
        $projects = Project::where('is_active', true)->where('name', '!=', $project->name)->orderBy('created_at', 'asc')->get()->take(6);

        return view('front.detail_project')
            ->with('project', $project)
            ->with('projects', $projects);
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

    public function posts()
    {
        $today = Carbon::now()->format('Y-m-d');

        $posts = Post::where('is_publish', 1)->whereDate('publish_date', '<=', $today)->get();

        $next_post = Post::where('is_publish', 1)->where('publish_date', '>', $today)->first();

        $n_days = 0;
        $n_hours = 0;
        $n_min = 0;
        $n_sec = 0;

        if (!empty($next_post)) {
            $n_days = Carbon::parse($next_post->publish_date)->diffInDays($today);
            $n_hours = Carbon::parse($next_post->publish_date)->diffInHours($today);
            $n_min = Carbon::parse($next_post->publish_date)->diffInMinutes($today);
            $n_sec = Carbon::parse($next_post->publish_date)->diffInSeconds($today);
        }

        return view('front.posts')
            ->with('posts', $posts)
            ->with('next_post', $next_post)
            ->with('n_days', $n_days)
            ->with('n_hours', $n_hours)
            ->with('n_min', $n_min)
            ->with('n_sec', $n_sec);
    }

    public function detailPost($slug)
    {
        $today = Carbon::now()->format('Y-m-d');
        $post = Post::where('slug', $slug)->first();

        $posts = Post::where('is_publish', true)->where('name', '!=', $post->name)->where('publish_date', '<=', $today)->orderBy('created_at', 'asc')->get()->take(6);

        return view('front.detail_post')
            ->with('post', $post)
            ->with('posts', $posts);
    }

    public function category($category_slug)
    {
        $today = Carbon::now()->format('Y-m-d');
        $category = Category::where('slug', $category_slug)->firstOrFail();

        $posts = Post::where('is_publish', 1)->whereDate('publish_date', '<=', $today)->whereHas('categories', function ($query) use ($category) {
            $query->where('category_id', $category->id);
        })->get();

        return view('front.posts')
            ->with('category', $category)
            ->with('posts', $posts);
    }
}
