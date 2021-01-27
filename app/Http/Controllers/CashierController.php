<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\tblcashierbankboxer;
use Illuminate\Support\Facades\Hash;

class CashierController extends Controller
{
    public function index()
    {
        dd(auth()->user()->isAdmin);
        $users = DB::table('users')
                ->where('isAdmin', '<>', true)
                ->get();

            $cajas = DB::table('tblbankboxes')                
                    ->get();                                
                        
            $nameAdmin = auth()->user()->name;
            

            if(auth()->user()->isAdmin)
            {
                dd('admin');
                //return redirect()->route('fakeLogin'); 

                return view('cashier.index', compact('users','cajas','nameAdmin'));
            }
            else
            {
                return redirect()->route('turno.index');                  
            }
                            
                            
    }

    public function showAddCajero()
    {
        //return 'hola';
        return view('auth.register');
    }

    public function addCajero(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);
       $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('fakeLogin');                
    }

    public function destroy($id)
    {        
        DB::table('users')->where('id', '=', $id)->delete(); 

        return redirect()->route('fakeLogin');                                       
    }

    // public function create()
    // {
    //     return view('cashier.create');
        
    // }
    public function mostrarCajero()
    {
        // $users = DB::table('sessions')                
        //         ->get();

        // $users = DB::table('users')
        // ->where('isAdmin', '<>', true)
        // ->get();
        //         $isAdmin = $users[0]->user_id;
        //         if ($isAdmin == null) 
        //         {
        //             return redirect('/');
        //         } 
        //         else 
        //         {
        //             return $next($request);                    
        //         }   

        // $users = DB::table('users')
        //         ->where('isAdmin', '<>', true)
        //         ->get();
                
        //             // $user = Auth::user();
        //             // dd($user);
                    
        //         $nameAdmin = auth()->user()->name;

        //         // $admin = DB::table('users')
        //         // ->where('isAdmin', '<>', false)
        //         // ->get();
        //         // $nameAdmin = $admin[0]->name;

        
        // return view('cashier.index', compact('users','nameAdmin'));
    }

    // public function show($obj)
    // {
        
    //     return view('cashier.show', compact('obj'));
    // }
}
