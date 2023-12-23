<?php

namespace App\Http\Controllers;

use App\Event;
use App\Transaction;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalEvents = Event::count();

        // Menghitung total tiket terjual dari seluruh event
        $totalTicketsSold = Transaction::sum('quantity');

        // Menghitung total sales atau pendapatan dari seluruh event
        $totalSales = Transaction::sum('total_payment');
        return view('dashboard', compact('totalUsers', 'totalEvents', 'totalTicketsSold', 'totalSales'));
    }
}
