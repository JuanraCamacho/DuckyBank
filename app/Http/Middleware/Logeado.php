<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $users = DB::table('sessions')                
                ->get();
                $isLog = $users[0]->user_id;
                //dd($isLog);
                if ($isLog == null) 
                {
                    // No es admin
                    $f = DB::table('users')                
                    ->get();
                    dd($f);
                    // if()
                    // {

                    // }
                    return redirect('/');
                } 
                else 
                {
                    return $next($request);                    
                }                
    }
}
