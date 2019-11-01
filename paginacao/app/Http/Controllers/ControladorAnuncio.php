<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Anuncio;
use App\Detalhe;

use DB;

// use App\portifolio;



class ControladorAnuncio extends Controller
{   
    // private $totalPage = 10;
    public function index() 
    {
         
       $anuncios = Anuncio::paginate(6);
        //   $anuncios = Anuncio::paginate($this->totalPage);
        return view('index', compact('anuncios'));


    }


    
    public function edit($id)
    {
        
        $mservicos = Detalhe::where('anuncios_id',$id)->get();
        
        $anuncios = Anuncio::find($id);

        if(isset($anuncios))  {
            return view('cliente.detalhesClientes.indexdetalhes', compact('anuncios','mservicos','id'));
        }
        else{
             return redirect('/detalhes');
        }

    }





    public function whoanuncia($id)
    {      

        // return App\portifolio::all();
     //$variavel = 1;
     
//         return   $portifolio =  DB::select('SELECT * from portifolio where users_id = 1'  ); 

                //   $portifolio = dump( DB::select('SELECT * from portifolio')[0]);

                // //  dd($portifolio->id);
                    
                   // return $id ;

                    $portifolio = ( DB::select('SELECT * from portifolio where idDoAnuncio =' . $id )[0]);  
                    $nome = ($portifolio->name);
                    $idade = ($portifolio->idade);
                    $sexo = ($portifolio->sexo);
                    $cnpj = ($portifolio->cnpj);
                    $MEI = ($portifolio->MEI);
                    $endereco = ($portifolio->endereco);
                    $cep = ($portifolio->cep);
                    $exp = ($portifolio->exp);
                    $aboutMe = ($portifolio->aboutMe);




          // return  "Olá".  $nome  ;

        if(isset($portifolio))  {
            return view('detalhes.portifoliodetalhes', compact('portifolio','nome','idade','sexo','cnpj',
            'MEI', 'endereco', 'cep','exp', 'aboutMe'));
        }
         else{
             return redirect('/home');
        }


//          return json_encode($portifolios);

    }


       public function searchHistoric(Request $request)
    {
         
        $dataForm = ($request->all());
        
        $historic->search($dataForm, $this->totalPage);
        
    }
    
    // public function search(Array $data, $totalPage)
    // {   
    //    $historics =  $this->where(function ($query) use($data) {
    //          if (isset($data['busca']))
    //               $query->where('busca',$data['titulo']);

    //          if (isset($data['busca']))
    //              $query->where('busca', $data['categoria']);
            

    //          if (isset($data['busca']))
    //              $query->where('busca', $data['municipio']);
    //     })
    //         ->toSql();dd($historics);


    //    return $buscar = ( DB::select('SELECT * from anuncios where titulo =' . $data )[0]);  


    // }


        public function  search (Request $request)
        {     
            // barra geral
             $text =  $request->text;
            
               if($text == '')
                 return redirect()
                             ->back()
                             ->with('error', 'conteúdo não encontrado');



            else {
            $anuncios = Anuncio::where('titulo', 'LIKE', "%{$text}%")->get();
            return view('filtrarAnuncios',compact('anuncios','text'));
            }


        }


}
