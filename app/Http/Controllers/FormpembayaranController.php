<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormpembayaranController extends Controller
{
    public function index()
    {
        return view('web.form-pembayaran');
    }
}
