<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\facades\Auth;

class starterController extends Controller
{
    public function index()
    {
        $userData = Auth::user();
        return view('starter',['userData'=>$userData]);
    }
}
