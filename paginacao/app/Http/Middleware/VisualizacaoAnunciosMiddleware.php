<?php

namespace App\Http\Middleware;

use Closure;

use App\Anuncio;

class VisualizacaoAnunciosMiddleware
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
          $id =   ($request->id);

         $prod = Anuncio::find($id);
         if(isset($prod)){

        $prod->visualizacoes = $prod->visualizacoes+=1;

        $prod->save();

        return $next($request);

        


    }
}

}