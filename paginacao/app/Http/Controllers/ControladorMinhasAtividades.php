<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Anuncio;
use App\Detalhe;
use DB;

use App\Http\Requests\updatecomentValidationFormRequest;




class ControladorMinhasAtividades extends Controller
{
  
    public function index()
    {  
            return view('cliente.paineladministradorClientes.indexpainel');
    }




          public function meuscomentarios() 
    {    


        $idUsuarioLogado =  auth() ->guard('cliente')-> user()->id;
        
        $mservicos = Detalhe::where('clientes_id',$idUsuarioLogado)->get();

         return view('cliente.paineladministradorClientes.meusfeedbackspainel', compact('mservicos'));

    }


    public function verPostagens($id) // poderia ser pego atravas da Request $request
    {  
       // $idAnuncio =  $request->id;
        $mservicos = Detalhe::where('anuncios_id',$id)->get();


         $anuncios = Anuncio::find($id);
        if(isset($anuncios))  {
            return view('cliente.detalhesClientes.indexdetalhes', compact('anuncios','mservicos','id'));
        }
        else{
             return redirect('/detalhes');
        }


    }

    



    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        
       // abre o local, forms onde serao enviadas as informações para a edição.
        $mservicos = Detalhe::find($id);
        if(isset($mservicos))  {
            return view('cliente.paineladministradorClientes.editarcomentario', compact('mservicos'));    
        }
        else{
             return redirect('/detalhes');
        }


    }

   
    public function update(updatecomentValidationFormRequest $request, $id)

    {      

            $prod = Detalhe::find($id);
            if(isset($prod)){
           $prod->titulo = $request->input('titulo');
           $prod->comentario = $request->input('comentario');

           $updatecomments =  $prod->save();
            json_encode($prod);


            // return view('cliente.paineladministradorClientes.indexpainel');    


            if($updatecomments)
            {
              return redirect()
                       ->route('clientepainel')
                       ->with('success', 'Sucesso ao Atualizar comentário !');
            }
    
            else 
            {  
               return redirect() 
               ->back()
               ->with('error', 'Falha ao Atualizar comentário :(');
            }




       }
    }
  
    public function destroy($id)
    {
          $mservicos = Detalhe::find($id)->delete();

        // return view('cliente.paineladministradorClientes.indexpainel');    


        if($mservicos)
        {
          return redirect()
                   ->route('clientepainel')
                   ->with('success', 'Sucesso ao deletar !');
        }

        else 
        {  
           return redirect() 
           ->back()
           ->with('error', 'Falha ao deletar comentário :(');
        }


    }
}
