<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class starterController extends Controller
{
    public function index()
    {
        return view('starter');
    }
}
