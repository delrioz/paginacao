<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Detalhe;

class ControladorDetalhe extends Controller
{   

        public function indexMeusFeedbacks() 
    {   
        

    }



    
 
    public function index()
    {
        $det =  Detalhe::all();
        //  compact -> cria array associativo
        return view('indexdetalhes', compact('det'));

    }
    


    public function create()
    {
        return view('novacategoria');
    }



    public function store(Request $request)
    {
        Detalhe::create($request->all());
             return "1";
        return redirect()->route('index');
    
    }


    public function avaliar(Request $request)
    {   
        return "botao avaliar enviado !";
        Detalhe::create($request->all());
        return "1";
        return redirect()->route('anuncios');
    }



    public function show($id)
    {
        //
    }

  

    public function update(Request $request, $id)
    {
        $cat = Categoria::find($id);
        if(isset($cat)){
            $cat->nome = $request->input('nomeCategoria');
            $cat->save();
        }

        return redirect('/categorias');

    }

  
    public function destroy($id)
    {
         $cat = Categoria::find($id);
         if(isset($cat)){
             $cat->delete();
         }
         return redirect('/categorias');
    }

     public function indexJSON()
    {
        $cats =  Categoria::all();
        // retornando o json

       return json_encode($cats);
    }


}


