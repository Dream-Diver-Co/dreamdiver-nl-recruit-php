<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $filename_path = null;
        if (isset($data['project_image']) && $data['project_image']) {
            $file = $data['project_image'];

            $name = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $filename = pathinfo($name, PATHINFO_FILENAME) . time() . '.' . $extension;
            $filename_path = request()->file('project_image')->storeAs('projects_image', $filename);
        }

        if (isset($data['project_cover_photo']) && $data['project_cover_photo']) {
            $file = $data['project_cover_photo'];

            $name = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $filename = pathinfo($name, PATHINFO_FILENAME) . time() . '.' . $extension;
            $filename_path2 = request()->file('project_cover_photo')->storeAs('projects_cover_photo', $filename);
        }

        $project = new Project();

        $project->project_title = $data['project_title'];
        $project->project_intro = $data['project_intro'];
        $project->project_link = $data['project_link'];
        $project->project_image = $filename_path;
        $project->status = $data['status'];

        $project->project_cover_photo = $filename_path2;
        $project->project_title = $data['project_title'];
        $project->project_description = $data['project_description'];
        $project->project_short_description = $data['project_short_description'];
        $project->project_video_link = $data['project_video_link'];
        $project->project_link = $data['project_link'];
        $project->project_client_review = $data['project_client_review'];
        $project->project_client_video_review = $data['project_client_video_review'];

        $project->save();



        return redirect()->back()->with('success', 'Project created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();

        //$project = Project::findOrFail($id);

        $filename_path = null;
        if (isset($data['project_image']) && $data['project_image']) {
            $file = $data['project_image'];

            $name = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $filename = pathinfo($name, PATHINFO_FILENAME) . time() . '.' . $extension;
            $filename_path = request()->file('project_image')->storeAs('projects_image', $filename);
        }

        $project->project_title = $data['project_title'];
        $project->project_intro = $data['project_intro'];
        $project->project_link = $data['project_link'];
        $project->project_image = $filename_path;
        $project->status = $data['status'];
        $project->save();


        return redirect()->back()->with('success', 'Project Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        // You can add a redirect or any other logic after the deletion.
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully');
    }
}
