<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tblcashierbankboxer;

class CashierController extends Controller
{
    public function index()
    {
        // $cashier = tblcashierbankboxer::all();
        // return view('cashier.index');

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
