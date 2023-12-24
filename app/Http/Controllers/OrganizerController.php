<?php

namespace App\Http\Controllers;

use App\Event;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrganizerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mendapatkan id penyelenggara yang sedang login
        $organizerId = auth()->user()->id;

        $data1 = DB::table('tbl_events')
            ->leftJoin('tbl_transactions', 'tbl_events.id', '=', 'tbl_transactions.event_id')
            ->where('tbl_events.organizer_id', $organizerId) // <-- Untuk mengambil data berdasarkan id Organizer
            ->select('tbl_events.id as event_id', 'tbl_events.event_name', DB::raw('COALESCE(SUM(tbl_transactions.quantity), 0) as total'))
            ->groupBy('tbl_events.id', 'tbl_events.event_name')
            ->get();

        $data2 = DB::table('tbl_events')
            ->leftJoin('tbl_transactions', 'tbl_events.id', '=', 'tbl_transactions.event_id')
            ->where('tbl_events.organizer_id', $organizerId) // <-- Untuk mengambil data berdasarkan id Organizer
            ->select('tbl_events.event_name', DB::raw('COALESCE(SUM(tbl_transactions.total_payment), 0) as total_revenue'))
            ->groupBy('tbl_events.id', 'tbl_events.event_name')
            ->get();

        $data3 = DB::table('tbl_transactions')
            ->join('tbl_events', 'tbl_transactions.event_id', '=', 'tbl_events.id')
            ->where('tbl_events.organizer_id', $organizerId) // <-- Untuk mengambil data berdasarkan id Organizer
            ->select('tbl_events.event_name', DB::raw('DATE(tbl_transactions.created_at) as date'), DB::raw('SUM(tbl_transactions.quantity) as total_tickets'))
            ->groupBy('tbl_events.event_name', DB::raw('DATE(tbl_transactions.created_at)'))
            ->get();

        $allDates = $data3->unique('date')->pluck('date');
        $allEvents = $data3->unique('event_name')->pluck('event_name');

        // Menghitung total event berdasarkan id penyelenggara
        $totalEvents = Event::where('organizer_id', $organizerId)->count();

        // Menghitung total tiket terjual berdasarkan id penyelenggara
        $totalTicketsSold = Transaction::whereHas('event', function ($query) use ($organizerId) {
            $query->where('organizer_id', $organizerId);
        })->sum('quantity');

        // Menghitung total sales atau pendapatan berdasarkan id penyelenggara
        $totalSales = Transaction::whereHas('event', function ($query) use ($organizerId) {
            $query->where('organizer_id', $organizerId);
        })->sum('total_payment');

        return view('organizer.dashboard-organizer', compact('totalEvents', 'totalTicketsSold', 'totalSales', 'data1', 'data2', 'data3', 'allDates', 'allEvents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
