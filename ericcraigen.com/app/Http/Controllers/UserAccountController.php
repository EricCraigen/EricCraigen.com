<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAccountController extends Controller
{
    public function getDashboard() {
        return view("components.user.dashboard", ["title" => "Eric Craigen | Dashboard"]);
    }

    public function getAccountSettings() {
        return view("components.user.settings", ["title" => "Eric Craigen | Account Settings"]);
    }
}
