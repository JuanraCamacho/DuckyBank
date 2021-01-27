<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {      
        // $user = auth()->user();
        // return $user;
        // $user = Auth::user()->id();
        
        // dd($user);
        // dd(auth()->user()->name); 
        // dd($guards); 
        // if(auth()->user()->name)
        // {
        //     $f=auth()->user()->isAdmin;    
        //     // dd($f); 
        //     return $f;
        //     dd('si entro');
        // } 
        // else
        // {
        //     dd('noet¿ntro');
        // }
        // $f=auth()->user()->isAdmin;    
        // return $f;      
        // // dd($f)  ;   
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {     
                //return redirect()->route('fakeLogin');           
                return redirect(RouteServiceProvider::HOME);
            }
        }        

        return $next($request);
    }
}
