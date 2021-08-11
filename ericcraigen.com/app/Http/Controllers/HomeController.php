<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;


class HomeController extends Controller
{
    public function getHomePage() {
        $projects = Project::where('featuredProject', true)->get();
        return view("pages.home", compact('projects'), ["title" => "Eric Craigen | Home"]);
    }

    public function getAboutPage() {
        return view("pages.about", ["title" => "Eric Craigen | About Me"]);
    }

    public function getContactPage() {
        return view("pages.contact", ["title" => "Eric Craigen | Contact Me"]);
    }

}
 