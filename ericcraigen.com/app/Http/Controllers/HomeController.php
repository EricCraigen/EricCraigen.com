<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;


class HomeController extends Controller
{
    public function getHomePage(REQUEST $request)
    {
        view()->share('title', 'Eric Craigen | Home');
        $projects = Project::where('featuredProject', true)->get();
        return view("pages.home", compact('projects'));
    }

    public function getAboutPage()
    {
        view()->share('title', 'Eric Craigen | About Me');
        return view("pages.about");
    }

    public function getContactPage()
    {
        view()->share('title', 'Eric Craigen | Contact Me');
        return view("pages.contact");
    }
}
