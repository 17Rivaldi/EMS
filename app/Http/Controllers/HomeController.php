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

    public function listEvent(Request $request)
    {
        // $allevents = Event::all();
        // return view('web.list-event', ['allevents' => $allevents]);
        // $allevents = Event::paginate(8); // <-- Jumlah Card Event dalam 1 Halama Pagination
        // return view('web.list-event', compact('allevents'));

        $search = $request->input('search');

        // Jika parameter pencarian tidak diberikan, kosongkan sesi
        if (!$search) {
            session(['search' => null]);
        } else {
            session(['search' => $search]);
        }

        $allevents = Event::when($search, function ($query, $search) {
            return $query->where('event_name', 'like', '%' . $search . '%')
                ->orWhere('event_location', 'like', '%' . $search . '%');
        })->paginate(8); // <-- Jumlah Card Event yang ditampilkan dalam 1 Halaman Pagination

        return view('web.list-event', compact('allevents'));
    }
}
