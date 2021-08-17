<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectsController extends Controller
{
    public function getLandingPad()
    {
        view()->share('title', 'Eric Craigen | My Projects');
        $projects = Project::all();
        return view("pages.projects", compact('projects'));
    }
}
