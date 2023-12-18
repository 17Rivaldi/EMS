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
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     * @return \Illuminate\Http\Response
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $today = date('Y-m-d');
        $events = Event::where('event_date', '>=', $today)
            ->orderBy('event_date')
            ->take(4)
            ->get();
        $eventterdekat = Event::where('event_date', '>=', $today)
            ->orderBy('event_date')
            ->take(1)
            ->get();

        $semuaevent = Event::all();

        return view('web.home', compact('semuaevent', 'events', 'eventterdekat'));
    }

    public function listEvent()
    {
        $allevents = Event::all();
        return view('web.list-event', ['allevents' => $allevents]);
    }
}
