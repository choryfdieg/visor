<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProjectRequest;
use App\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('project.index', [
            'projects' => Project::latest()->paginate(),
        ]);
    }

    public function show(Project $project)
    {

        return view('project.show', [
            'project' => $project,
        ]);
    }

    public function create()
    {
        return view('project.create', [
            'project' => new Project,
        ]);
    }

    public function store(SaveProjectRequest $request)
    {

        Project::create($request->validated());

        return redirect()->route('projects.index')->with('status', 'Creado con exito');
    }

    public function edit(Project $project)
    {
        return view('project.edit', [
            'project' => $project,
        ]);
    }

    public function update(Project $project, SaveProjectRequest $request)
    {

        $project->update($request->validated());

        return redirect()->route('projects.show', $project)->with('status', 'Actualizado con exito');
    }

    public function destroy(Project $project)
    {

        $project->delete();

        return redirect()->route('projects.index')->with('status', 'Eliminado con exito');
    }
}
