<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $caj = DB::table('users')
                ->where('isAdmin', '<>', true)
                ->get();
        //return $caj;
        return view('cashier.index', compact('caj'));
    }
    public function create()
    {
        $caj = DB::table('users')
                ->where('isAdmin', '<>', true)
                ->get();
        //return $cashier;
        return view('cashier.create', compact('caj'));
    }

    // public function store()
    // {

    // }

    public function show($id)
    {
        $caj = User::find($id);
        //return $cashier;        
        return view('cashier.show', compact('caj'));

    }
}
