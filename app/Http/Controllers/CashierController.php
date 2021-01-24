<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
    public function mostrarCajero()
    {
        $users = DB::table('users')
                ->where('isAdmin', '<>', true)
                ->get();

                $admin = DB::table('users')
                ->where('isAdmin', '<>', false)
                ->get();
                $nameAdmin = $admin[0]->name;

        
        return view('cashier.index', compact('users','nameAdmin'));
    }

    public function show($obj)
    {
        
        return view('cashier.show', compact('obj'));
    }
}
