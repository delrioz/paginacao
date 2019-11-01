<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Anuncio;
use App\Detalhe;
use App\ufcadastrados;

use App\Categoria;

use DB;

// use App\portifolio;



class ControladorAnuncioVendedor extends Controller
{
    // private $totalPage = 10;
    public function index()
    {




           $categorias = Categoria::orderBy('name', 'asc', 'LIMIT 3')->get();

           $anuncios = Anuncio::paginate(9);
          //   $anuncios = Anuncio::paginate($this->totalPage);
           return view('telainicial', compact('anuncios','categorias'));

    }



    public function edit($id)
    {

        $mservicos = Detalhe::where('anuncios_id',$id)->get();

        $anuncios = Anuncio::find($id);

        if(isset($anuncios))  {
            return view('detalhes.indexdetalhes', compact('anuncios','mservicos','id'));
        }
        else{
             return redirect('/detalhes');
        }

    }



        public function avaliar(Request $request)
        {
        Detalhe::create($request->all());
        return redirect()->route('anuncios');

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
                $image = ($portifolio->image);
                $diplomaCertificado = ($portifolio->diplomaCertificado);
                $created_at = ($portifolio->created_at);
                $updated_at = ($portifolio->updated_at);




          // return  "Olá".  $nome  ;

        if(isset($portifolio))  {
            return view('detalhes.portifoliodetalhes', compact('portifolio','nome','idade','sexo','cnpj',
            'MEI', 'endereco', 'cep','exp', 'aboutMe','id','image','diplomaCertificado','created_at','updated_at'));
        }
         else{
             return redirect('/home');
        }


//          return json_encode($portifolios);



    }

    public function whoanunciacontacts ($id)

    {


          $portifolio = ( DB::select('SELECT * from portifolio where idDoAnuncio =' . $id )[0]);
                      $email = ($portifolio->email);
                      $telefone = ($portifolio->telefone);



          if(isset($portifolio))  {
              return view('detalhes.contatodetalhes',
              compact('portifolio','email','telefone','id'));
          }
           else{
               return redirect('/home');
          }

      }




            public function listarcategorias()
            {

              $categorias = Categoria::all();

                return view('listarcategorias',compact('categorias'));

            }

            public function enviarcategoriasugerida(Request $request)
            {

                $categoria =  $request->categoria;
                $motivo =  $request->motivo;

               $Sugestion =   DB::insert('INSERT INTO sugestoes(categoria,motivo)
                    VALUES (:categoria, :motivo)', [


                        'categoria' => $categoria,
                        'motivo' => $motivo,
                    ]);

                    if  ($Sugestion == true  ){

                        return redirect()
                                ->route('cats')
                        ->with('success', 'Sugestão enviada com sucesso!');

                    }


                else {
                        return "false";
                }


          }

          


          public function filtragem  (Request $request)
       {

          $categorias = Categoria::all();

           $titulo =   $request->titulo;
           $sobre =   $request->sobre;
           $categoria =   $request->categoria;

           // return "addasdsa";
           // //    $dataForm = $request->all();
           // //    $resultado =  $dataForm ;
           // //    $historics = $resultado->search2($dataForm. $this->totalPage);

           //   ($request->all());
           //     $text =  $request->text;

           //    if($text == '')
           //      return redirect()
           //                  ->back()
           //                  ->with('error', 'conteúdo não encontrado');


           // else {
           //  $anuncios = Anuncio::where('titulo', 'LIKE', "%{$text}%")->get();
           // return view('cliente.CfiltrarAnuncios2',compact('anuncios','text'));
           // }


           // $variavel =    $this->where(function ($query) use($data){

           //         if(isset($data['id']))
           //         $query->where('id', $data['id']);

           //         if(isset($data['date']))
           //         $query->where('date', $data['date']);


           //         if(isset($data['type']))
           //         $query->where('type', $data['type']);


           // })
           // ->toSql();dd($variavel);

           if($titulo == ''  && $sobre == '' &&  $categoria == '')
                return redirect()
                            ->back()
                            ->with('error', 'conteúdo não encontrado');


           else {

                if (isset($sobre)) {


               $anuncios = Anuncio::where('sobre', 'LIKE', "%{$sobre}%")->get();
               return view('todosanuncios',compact('anuncios','sobre','categorias'));

                   }



                   if(isset($categoria)){
           $anuncios = Anuncio::where('categoria', 'LIKE', "%{$categoria}%")->get();
           return view('todosanuncios',compact('anuncios','categoria','categorias'));
           }

                   if (isset($titulo)) {

               $anuncios = Anuncio::where('titulo', 'LIKE', "%{$titulo}%")->get();
               return view('todosanuncios',compact('anuncios','titulo','categorias'));


                   }


            }

   }


        public function indextodosanunciosvendedor ()
        {


            $anuncios = Anuncio::paginate(20);
            $categorias = Categoria::all();
            $estadosanuncios = ufcadastrados::all();

            $normal = '';
           //   $anuncios = Anuncio::paginate($this->totalPage);
           return view('todosanuncios', compact('anuncios','categorias','normal','estadosanuncios'));


        }



          public function filtragem2  (Request $request)
       {


           $estadosanuncios = ufcadastrados::all();
           $dataForm = $request->except('_token');

           $categorias = Categoria::all();

           $titulo =   $request->titulo;
           $sobre =   $request->sobre;
           $categoria =   $request->categoria;
           $estadosanuncio =   $request->estadosanuncio;


           if($titulo == ''  && $sobre == '' &&  $categoria == '' && $estadosanuncio == ''){

               $titulo == '';
               $sobre == '';
               $categorias == '';
               $estadosanuncios == '';

            //    $anuncios = Anuncio::where('sobre', 'LIKE', "")->paginate(4);
                $anuncios = Anuncio::paginate(4);

           return view('todosanuncios',compact('anuncios','sobre','categorias','dataForm','estadosanuncios'));

            }


        //    else {


        //         if (isset($sobre)) {


        //        $anuncios = Anuncio::where('sobre', 'LIKE', "%{$sobre}%")->paginate(5);
        //        return view('todosanuncios',compact('anuncios','sobre','categorias','dataForm'));

        //            }



        //            if(isset($categoria)){
        //    $anuncios = Anuncio::where('categoria', 'LIKE', "%{$categoria}%")->paginate(5);
        //    return view('todosanuncios',compact('anuncios','categoria','categorias','dataForm'));
        //    }

        //            if (isset($titulo)) {

        //        $anuncios = Anuncio::where('titulo', 'LIKE', "%{$titulo}%")->paginate(5);
        //        return view('todosanuncios',compact('anuncios','titulo','categorias','dataForm'));


        //            }


        else {
                
            $anuncios =  Anuncio::where(function ($query) use ($dataForm, $titulo, $categoria, $estadosanuncio) {

                if(isset($dataForm['titulo']))  // vericamos se este valor existe
                $anuncios = $query->where('titulo', 'LIKE', "%{$titulo}%");             //aqui faremos um filtro pra ele seja where , orwhere ...


                if(isset($dataForm['categoria']))
                $anuncios = $query->where('categoria', 'LIKE', "%{$categoria}%");
                
                if(isset($dataForm['estadosanuncio']))
                $anuncios =   $query->where('UF', 'LIKE', "%{$estadosanuncio}%");

            })->paginate(10);
            return view('todosanuncios',compact('anuncios','sobre','categorias','dataForm','estadosanuncios'));

         
            }

        }




          public function categoria ($name)
          {

               // return $name;
                $cats = $name ;
               $categorias = Categoria::all();
               $estadosanuncios = ufcadastrados::all();



               $anuncios = Anuncio::where('categoria', 'LIKE', "%{$name}%")->orderBy('vip','desc','1')->paginate(5);
               return view('todosanuncios',compact('anuncios','categorias','name','estadosanuncios'));


           // $categorias = Categoria::orderBy('name', 'asc', 'LIMIT 3')->get();

          }


        public function search  (Request $request)
        {


                $dataForm = $request->except('_token');

                $estadosanuncios = ufcadastrados::all();

                $categorias = Categoria::all();

                $text =   $request->text;
                $titulo =   $request->titulo;
                $sobre =   $request->sobre;
                $categoria =   $request->categoria;
                $a = "a";

                $text =  $request->text;


                if($text == '')  {
                $titulo == '';
                $sobre == '';
                $categorias == '';
                $anuncios = Anuncio::paginate(4);

                return view('todosanuncios',compact('anuncios','sobre','categorias','dataForm','estadosanuncios'));



            }



            else {

                 if (isset($text)) {

                $anuncios = Anuncio::where('titulo', 'LIKE', "%{$text}%")->get();
                return view('todosanuncios',compact('anuncios','text','categorias','a','estadosanuncios'));

                    }



                    if(isset($text)){
            $anuncios = Anuncio::where('titulo', 'LIKE', "%{$text}%")->get();
            return view('todosanuncios',compact('anuncios','text','categorias','a','estadosanuncios'));
            }

                    if (isset($text)) {

                $anuncios = Anuncio::where('titulo', 'LIKE', "%{$text}%")->get();
                return view('todosanuncios',compact('anuncios','text','categorias','a','estadosanuncios'));


                    }




            }


        }

}
