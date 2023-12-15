<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     * @return \Illuminate\Http\Response
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $events = Event::orderBy('event_date')->take(4)->get();
        return view('web.home', ['events' => $events]);
    }

    public function listEvent()
    {
        return view('web.list-event');
    }
}
