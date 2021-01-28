<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\tblturn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\tblcashierbankboxer;

class TcajeroController extends Controller
{
    public function index()
    {        
        $isAdmin = auth()->user()->isAdmin;
        $nameAdmin = auth()->user()->name;        
        if($isAdmin)
        {
            //dd('adminTcajero');            
            return redirect()->route('fakeLogin');
        }
        else
        {            
            //dd('no AdminTcajero');
            return redirect()->route('showCajasDisponibles');
            
            //return view('turn.index', compact('nameAdmin'));
        }                        
    }

    public function showCajasDisponibles()
    {
        $nameAdmin = auth()->user()->name;          
        $cajas=DB::select('SELECT tblbankboxes.id, tblbankboxes.caja
                    FROM banco_turnos_db.tblbankboxes 
                    WHERE tblbankboxes.isAvailable = 1');                                
        return view('turn.index', compact('nameAdmin','cajas'));
    }

    public function takeCaja($id)
    {
        dd($id);
        $id_user = auth()->user()->id;
        $nameAdmin = auth()->user()->name;
        $date = Carbon::now();
        // return ($date);

        $empleado_caja = tblcashierbankboxer::create([
            'tblbankboxe_id' => $id,
            'user_id' => $id_user,
            // 'enabled' => 1,
            'openDatetime' => $date
        ]);

        $folio = "Sin Atender";

        return view('cashier.atenderTurno', compact('nameAdmin','folio'));
        //dd('taked');
    }

    public function abrirCaja($id)
    {        
        // dd('fd');
        // dd($id);
        $id_user = auth()->user()->id;
        $nameAdmin = auth()->user()->name;
        $date = Carbon::now();
        // return ($date);

        $empleado_caja = tblcashierbankboxer::create([
            'tblbankboxe_id' => $id,
            'user_id' => $id_user,
            // 'enabled' => 1,
            'openDatetime' => $date
        ]);
        DB::table('tblbankboxes')->where('id',$id)->update(['isAvailable' => 0]);

        $folio = "Sin Atender";

        return view('cashier.atenderTurno', compact('nameAdmin','folio'));
    }

    // public function abrirCaja($id)
    // {
    //     $id_user = auth()->user()->id;
    //     $nameAdmin = auth()->user()->name;
    //     $date = Carbon::now();

    //     $empleado_caja = telleremploye::create([
    //         'catteller_id' => $id,
    //         'user_id' => $id_user,
    //         'enabled' => 1,
    //         'open' => $date
    //     ]);

    //     $folio = "Sin Atender";

    //     return view('Cajero.atender', compact('nameAdmin','folio'));
    // }
    public function mostrarTurnos()
    {
       
        $date = Carbon::now()->format('Y-m-d');

        $cliente = DB::table('tblcustomers')
                ->where('created_at','>=', $date)
                ->where('attended','=',0)
                ->orderBy('created_at', 'asc')
                ->get();
        
                
        if(sizeof($cliente)>0)
        {        
            $caja = DB::table('tblcashierbankboxers')
                    ->where('user_id','=',auth()->user()->id)
                    //->where('enabled', '=',1)
                    ->orderBy('created_at', 'desc')
                    ->get();
        
            $empleado_cliente = tblturn::create([
                        'tblcashierbankboxer_id' => $caja[0]->id,
                        'tblcustomer_id' => $cliente[0]->id,
                    ]);            
            
            DB::table('tblcustomers')
                    ->where('id', $cliente[0]->id)  // find your user by their email
                    ->update(array('attended' => 1));  // update the record in the DB.
        
                $folio = $cliente[0]->folio;
        }
        else{
            $folio = "No hay mas clientes";
        }
        $nameAdmin = auth()->user()->name;
        
        
        return view('cashier.atenderTurno',compact('nameAdmin','folio'));

    }
}
