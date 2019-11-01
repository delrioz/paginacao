<?php

namespace App\Http\Middleware;

use Closure;

use App\Categoria;



class CatsMaisPesquisadas
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
        
        // return response($request->name); 
         $nome = $request->name; 

         // return response ($categorias = Categoria::all());

       ( $categorias = Categoria::all()->where('name', '=', $nome)->first());

        if(isset($categorias)){

            $categorias->visualizacoes = $categorias->visualizacoes+=1;

            
            $categorias->save();

        };

        return $next($request);
        

    }



}
