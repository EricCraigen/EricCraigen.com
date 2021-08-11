<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectsController extends Controller
{
    public function getLandingPad() {
        $projects = Project::all();
        return view("pages.projects.landingPad", compact('projects'), ["title" => "Eric Craigen | My Projects"]);
    }
}
  