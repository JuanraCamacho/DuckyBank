<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TcajeroController extends Controller
{
    public function index()
    {
        // $isAdmin = auth()->user()->isAdmin;
        $isAdmin = auth()->user()->isAdmin;
        //dd($idAdmin);
        //return redirect()->route('fakeLogin');

        if($isAdmin)
        {
            dd('admin');
            //dd('si entro');
            //return redirect()->route('fakeLogin');
        }
        else
        {
            dd('no Admin');
            //return view('turn.index', compact('nameAdmin'));
        }
                // dd($nameAdmin);
        
    }
}
