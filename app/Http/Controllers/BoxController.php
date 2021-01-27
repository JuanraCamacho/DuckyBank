<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\tblbankboxe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BoxController extends Controller
{
    public function showAddCaja()
    {                
        return view('box.create');
    }

    public function addCaja(Request $request)
    {
        $request->validate([
            'caja' => 'required|max:2',            
        ]);

       $user = tblbankboxe::create([
            'caja' => $request->caja,            
        ]);

        return redirect()->route('fakeLogin');                
    }

    public function destroy($id)
    {        
        DB::table('tblbankboxes')->where('id', '=', $id)->delete(); 

        return redirect()->route('fakeLogin');                                       
    }
}
