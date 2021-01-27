<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Logeado
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {        
        if (Auth::check())
        {    
            //return $next($request);
            $isAdmin = auth()->user()->isAdmin;            
            if($isAdmin <> 1)
            {     
                //Normalazo 
                      
                //dd('hola');    
                //return route('cajas');
                return $next($request);
                //return redirect('/cajas');
            }
            else
            {      
                //Admin          
                return $next($request);
            }            
        }
        else
        {
            return redirect('/');        
        }                   
    }
}
