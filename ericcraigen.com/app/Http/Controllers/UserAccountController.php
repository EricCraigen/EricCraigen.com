<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Contact;

class UserAccountController extends Controller
{
    public function getDashboard()
    {
        view()->share('title', 'Eric Craigen | Dashboard');
        return view("pages.user.dashboard");
    }

    public function getSiteMetrics()
    {
        view()->share('title', 'Eric Craigen | Site Metrics');
        return view("pages.user.site-metrics");
    }

    public function getSiteUsers()
    {
        view()->share('title', 'Eric Craigen | Site Users');
        return view("pages.user.site-users");
    }

    public function getUserProfile()
    {
        view()->share('title', 'Eric Craigen | Profile');
        return view("pages.user.profile");
    }

    public function getContactMessages()
    {
        $inbox = Contact::where('messageStarred', false)->where('messageSnoozed', false)->where('messageTrashed', false)->get();
        $starred = Contact::where('messageStarred', true)->get();
        $snoozed = Contact::where('messageSnoozed', true)->get();
        $trashed = Contact::where('messageTrashed', true)->get();

        view()->share('title', 'Eric Craigen | Message Inbox');
        return view("pages.user.messages", compact('inbox', 'starred', 'snoozed', 'trashed',));
    }

    public function getSettings()
    {
        view()->share('title', 'Eric Craigen | Account Settings');
        return view("pages.user.settings");
    }
}
