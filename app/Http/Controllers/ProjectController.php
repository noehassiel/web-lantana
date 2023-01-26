<?php

namespace App\Http\Controllers;

use Auth;
use Image;
use Session;
use Purifier;
use Str;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('updated_at', 'desc')->orderBy('is_active', 'desc')->paginate(10);

        return view('back.projects.index')
            ->with('projects', $projects);
    }

    public function create()
    {
        return view('back.projects.create');
    }

    public function store(Request $request)
    {
        //Validar
        $this->validate($request, array(
            'title' => 'unique:banners|required|max:255',
            'subtitle' => 'nullable',
            'main_picture' => 'sometimes|min:10|max:2100',
        ));

        $project = new Project;

        $project->title = $request->title;
        $project->slug = Str::slug($request->title, '-');

        $project->subtitle = $request->subtitle;
        $project->company = $request->company;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = 'bannerdesktop' . time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('img/projects/' . $filename);

            Image::make($image)->resize(1280, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($location);

            $project->main_picture = $filename;
        }

        $project->is_active = true;

        $project->body = $request->body;

        $project->save();

        // Mensaje de session
        Session::flash('success', 'Se creo el proyecto con exito.');

        // Enviar a vista
        return redirect()->route('projects.show', $project->id);
    }

    public function show($id)
    {
        return view('back.projects.show');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function status(Request $request)
    {
        // Guardar datos en la base de datos
        $project = Project::find($request->id);

        if ($project->is_active == true) {
            $project->is_active = false;
        } else {
            $project->is_active = true;
        }

        $project->save();

        // Mensaje de session
        Session::flash('success', 'El proyecto se ha cambiado de estado.');

        // Enviar a vista
        return redirect()->route('projects.index');
    }

    public function destroy($id)
    {
        $project = Project::find($id);

        $project->delete();

        // Mensaje de session
        Session::flash('success', 'El proyecto se ha eliminado.');

        return redirect()->back();
    }
}
