<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class FrontController extends Controller
{
    public function index()
    {
        $banners = Banner::where('is_active', true)->get();

        return view('front.index')
            ->with('banners', $banners);
    }
}
