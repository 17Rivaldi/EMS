<?php

namespace App\Http\Controllers;

use App\Event;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormPembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web.form-pembayaran');
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
        // $quantity = $request->input('quantity');
        // $ticketPrice = $event->ticket_price;
        // $totalPayment = $quantity * $ticketPrice;

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'alamat' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'quantity' => 'required|integer|min:1',
        ]);

        $event = Event::find($request->input('event_id'));

        if (!$event) {
            return abort(404); // Atau atur respons lainnya jika event tidak ditemukan
        }

        // Simpan data ke dalam database
        $transaction = new Transaction([
            'event_id' => $event->id,
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'alamat' => $request->input('alamat'),
            'phone' => $request->input('phone'),
            'quantity' => $request->input('quantity'),
            'total_payment' => $event->ticket_price * $request->input('quantity'),
        ]);

        $transaction->save();

        // Tambahkan redirect atau respons lainnya
        return redirect()->route('home')->with('success', 'Pembelian Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        $user = Auth::user();

        if (!$event) {
            return abort(404); // Atau atur respons lainnya jika event tidak ditemukan
        }

        return view('web.form-pembayaran', compact('event', 'user'));
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
