<?php

namespace App\Http\Middleware;

use Closure;

use App\Categoria;


class TdsAnunciosCliMiddleware
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
        ($request);


        $cat = $request->categoria;

        $title = $request->titulo;

        // return response("Dados pesquisados<br> Categoria:". $cat. "titulo". $title);
        

        ( $categorias = Categoria::all()->where('name', '=', $cat)->first());


        if(isset($categorias)){

            $categorias->visualizacoes = $categorias->visualizacoes+=1;

            $categorias->save();

        };


        return $next($request);
    }

    
}
