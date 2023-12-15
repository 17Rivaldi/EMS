<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class DetailController extends Controller
{
    public function index()
    {
        $event=Event::all();
        return view('web.detail', compact('event'));
    }
}
