<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('back.projects.index');
    }

    public function create()
    {
        return view('back.projects.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return view('back.projects.show');
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
