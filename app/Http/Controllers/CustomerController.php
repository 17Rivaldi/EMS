<?php

namespace App\Http\Controllers;

use App\Event;
use App\User;
use App\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        if ($user->hasRole('admin')) {
            $purchases = $this->getAdminPurchases();
            return view('customer.index', ['purchases' => $purchases]);
        } elseif ($user->hasRole('organizer')) {
            $purchases = $this->getOrganizerPurchases($user->id);
            return view('organizer.customer-organizer.index', ['purchases' => $purchases]);
        }
    }

    private function getAdminPurchases()
    {
        return DB::table('tbl_transactions')
            ->join('tbl_events', 'tbl_transactions.event_id', '=', 'tbl_events.id')
            ->join('tbl_users', 'tbl_transactions.user_id', '=', 'tbl_users.id')
            ->select(
                'tbl_transactions.user_id',
                'tbl_users.name',
                'tbl_events.event_name',
                'tbl_transactions.created_at', 
                DB::raw('SUM(tbl_transactions.quantity) as total_quantity'),
                DB::raw('SUM(tbl_transactions.total_payment) as total_payment')
            )
            ->groupBy('tbl_transactions.user_id', 'tbl_users.name', 'tbl_events.event_name', 'tbl_transactions.created_at') 
            ->get();
    }

    private function getOrganizerPurchases($organizerId)
    {
        return DB::table('tbl_transactions')
            ->join('tbl_events', 'tbl_transactions.event_id', '=', 'tbl_events.id')
            ->join('tbl_users', 'tbl_transactions.user_id', '=', 'tbl_users.id')
            ->where('tbl_events.organizer_id', $organizerId)
            ->select(
                'tbl_transactions.user_id',
                'tbl_users.name',
                'tbl_events.event_name',
                'tbl_transactions.created_at', 
                DB::raw('SUM(tbl_transactions.quantity) as total_quantity'),
                DB::raw('SUM(tbl_transactions.total_payment) as total_payment')
            )
            ->groupBy('tbl_transactions.user_id', 'tbl_users.name', 'tbl_events.event_name', 'tbl_transactions.created_at') 
            ->get();
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
