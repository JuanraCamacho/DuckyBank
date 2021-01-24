<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')
                ->where('isAdmin', '<>', true)
                ->get();
                //return $users;

        return view('cashier.index', compact('users'));        
    }
    public function create()
    {
        $caj = DB::table('users')
                ->where('isAdmin', '<>', true)
                ->get();
        //return $cashier;
        return view('cashier.create', compact('caj'));
    }    

    public function show($id)
    {
        $caj = User::find($id);
        //return $cashier;        
        return view('cashier.show', compact('caj'));
    }

    public function destroy($id)
    {
        DB::table('users')->where('id', '=', $id)->delete();    
        $users = DB::table('users')
                ->where('isAdmin', '<>', true)
                ->get();
            
                $admin = DB::table('users')
                ->where('isAdmin', '<>', false)
                ->get();
                $nameAdmin = $admin[0]->name;

        
        return view('cashier.index', compact('users','nameAdmin'));
        //return view('cashier.index', compact('users'));
    }
}
