<?php

namespace App\Http\Controllers;

use App\Models\tblcustomer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TclienteController extends Controller
{
    public function showTurno()
    {                
        $operations=DB::select('SELECT tbloperations.id, tbloperations.operation
                    FROM banco_turnos_db.tbloperations');                     
        
        $folio = DB::select('CALL folio'); 
                                                           

        return view('cliente.kiosko', compact('operations','folio'));  
    }

    public function tomarTurno(Request $request)
    {
        $turn = tblcustomer::create([                                    
            'tbloperation_id' => $request->operation,
            'name' => $request->Nombre,
            'folio' => $request->folio,
            'attended' => 0,
        ]);

        return redirect()->route('ticket', ['id' => $turn->id ]);
    }    

    public function mostrarTicket($id)
    {
        
        $turn = DB::table('tblcustomers')
            ->select('folio','created_at','tbloperation_id', 'name')
            ->where("id","=",$id)
            ->get();
            
        $operacion = DB::table('tbloperations')
        ->select('operation')
        ->where("id","=",$turn[0]->tbloperation_id)
        ->get();

        $operacion[0]->operation = strtoupper($operacion[0]->operation);


        return view('Cliente.ticket',compact('turn','operacion'));
    }
}
