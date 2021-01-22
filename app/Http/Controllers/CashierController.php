<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CashierController extends Controller
{
    public function index()
    {
        return view('cashier.index');

    }

    public function create()
    {
        return view('cashier.create');
        
    }

    public function show($obj)
    {
        
        return view('cashier.show', compact('obj'));
    }
}
