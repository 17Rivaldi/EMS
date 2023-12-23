<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Event;
use App\Transaction;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data1 = DB::table('tbl_events')
            ->leftJoin('tbl_transactions', 'tbl_events.id', '=', 'tbl_transactions.event_id')
            ->select('tbl_events.id as event_id', 'tbl_events.event_name', DB::raw('COALESCE(SUM(tbl_transactions.quantity), 0) as total'))
            ->groupBy('tbl_events.id', 'tbl_events.event_name')
            ->get();

        $data2 = DB::table('tbl_events')
            ->leftJoin('tbl_transactions', 'tbl_events.id', '=', 'tbl_transactions.event_id')
            ->select('tbl_events.event_name', DB::raw('COALESCE(SUM(tbl_transactions.total_payment), 0) as total_revenue'))
            ->groupBy('tbl_events.id', 'tbl_events.event_name')
            ->get();

        $data3 = DB::table('tbl_transactions')
            ->join('tbl_events', 'tbl_transactions.event_id', '=', 'tbl_events.id')
            ->select('tbl_events.event_name', DB::raw('DATE(tbl_transactions.created_at) as date'), DB::raw('SUM(tbl_transactions.quantity) as total_tickets'))
            ->groupBy('tbl_events.event_name', DB::raw('DATE(tbl_transactions.created_at)'))
            ->get();

        $allDates = $data3->unique('date')->pluck('date');
        $allEvents = $data3->unique('event_name')->pluck('event_name');


        $messages = Contact::paginate(4);
        $totalUsers = User::count();
        $totalEvents = Event::count();

        // Menghitung total tiket terjual dari seluruh event
        $totalTicketsSold = Transaction::sum('quantity');

        // Menghitung total sales atau pendapatan dari seluruh event
        $totalSales = Transaction::sum('total_payment');
        return view('dashboard', compact('totalUsers', 'totalEvents', 'totalTicketsSold', 'totalSales', 'messages', 'data1', 'data2', 'data3', 'allDates', 'allEvents'));
    }
}
