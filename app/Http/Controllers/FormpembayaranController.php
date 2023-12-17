<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class FormpembayaranController extends Controller
{
    public function index()
    {
        return view('web.form-pembayaran');
    }

    public function show($id)
{
    $event = Event::find($id);

    if (!$event) {
        return abort(404); // Atau atur respons lainnya jika event tidak ditemukan
    }

    return view('web.form-pembayaran', compact('event'));
}

}
