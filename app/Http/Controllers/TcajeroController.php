<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TcajeroController extends Controller
{
    public function index()
    {
        $nameAdmin = auth()->user()->name;
        return view('cashier.cajas', compact('nameAdmin'));
    }
}
