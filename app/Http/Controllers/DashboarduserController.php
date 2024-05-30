<?php

namespace App\Http\Controllers;
use Illuminate\View\View;

use Illuminate\Http\Request;

class DashboarduserController extends Controller
{

    public function indexdashboard(): View
    {
        return view('dashboardUsers.dashboard');
    }

    public function indexlihat(): View
    {
        return view('dashboardUsers.lhtprofile');
    }

    public function indexedit(): View
    {
        return view('dashboardUsers.editprofile');
    }

    public function indexpass(): view
    {
        return view('dashboardUsers.pass');
    }
}
