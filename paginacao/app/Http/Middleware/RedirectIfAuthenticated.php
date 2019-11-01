<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{

    public function handle($request, Closure $next, $guard = null)
    {    
       // AO TENTARMOS ACESSAR A TELA DE LOGIN JÁ ESTANDO LOGADOS 
        if (Auth::guard($guard)->check()) {
            if($guard == 'admin'){
              return redirect()->route('homeAdmin');
             }

            if($guard == 'cliente'){
              return redirect()->route('cliente.dashboard');
             }
        
        if(Auth::guard($guard)->check()) {

            return redirect('/anuncios');

        }
      
        
      }

        return $next($request);
    }
}
