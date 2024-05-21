<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::orderByDesc('id')->paginate(8);

        //dd($projects);

        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $val_data = $request->validated();

        //dd($val_data);

        $slug = Str::slug($request->name, '-');

        //dd($slug);

        $val_data['slug'] = $slug;

        Project::create($val_data);

        return to_route('admin.projects.index')->with('message', 'Project created with success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //dd($project);

        return View('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $val_data = $request->validated();

        //dd($val_data);

        $slug = Str::slug($request->name, '-');

        //dd($slug);

        $val_data['slug'] = $slug;

        $project->update($val_data);

        return to_route('admin.projects.index')->with('message', $project->name . ' updated with success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {

        //dd($project);
        $project->delete();

        return back()->with('message', $project->name . ' deleted with success');
    }
}
