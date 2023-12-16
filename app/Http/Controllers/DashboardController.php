<?php

namespace App\Http\Controllers;

use App\Event;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalEvents = Event::count();
        return view('dashboard', compact('totalUsers', 'totalEvents'));
    }
}
