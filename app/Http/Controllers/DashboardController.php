<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        return view('dashboard', compact('totalUsers'));
    }
}
