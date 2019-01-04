<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function projects() {

      $projects = Project::all();

      // later, for current user:
        // = auth()->user()->projects;

      // return $projects;

      return view('projects.index', [
        'projects' => $projects
      ]);
    }

    public function create()
    {
      return view('projects.create');
    }

    public function store() {
      $project = new Project();
      $project->title = request('title');
      $project->description = request('description');
      $project->save();
      return redirect('/projects');
    }

    public function update() {

    }
}
