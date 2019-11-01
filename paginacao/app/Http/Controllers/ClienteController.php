<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\HomeEvent;

use App\Anuncio;
use App\Detalhe;
use App\Categoria;
use App\ufcadastrados;

use DB;


use App\Http\Requests\updatecomentValidationFormRequest;


// use App\portifolio;


class ClienteController extends Controller
{

    public function __construct() {
         $this->middleware('auth:cliente');

    }

    public function index() {
       // return view ('admin');


         $indice = 6;
         $categorias = Categoria::orderBy('visualizacoes', 'desc')->get();


         
        //  $anuncios = Anuncio::paginate($indice);
         

         $anuncios = Anuncio::orderBy('visualizacoes', 'desc')->paginate($indice);



    //   $anuncios = Anuncio::paginate($this->totalPage);
        return view('cliente.indexCliente', compact('anuncios','categorias'));



    }


    public function edit($id)
    {
        $mservicos = DB::select('SELECT * FROM whoavalia where anuncios_id = '.$id);

        // $mservicos = DB::where('anuncios_id',$id   'FROM sugestoes')->get();
        $anuncios = Anuncio::find($id);

        if(isset($anuncios))  {
            return view('cliente.detalhesClientes.indexdetalhes', compact('anuncios','mservicos'));
        }
        else{
             return redirect('/detalhes');
        }

    }


     public function acessar($id)
     {



         $mservicos = DB::select('SELECT * FROM whoavalia where anuncios_id = '.$id);

        // $mservicos = DB::where('anuncios_id',$id   'FROM sugestoes')->get();
        $anuncios = Anuncio::find($id);

        if(isset($anuncios))  {
            return view('cliente.detalhesClientes.indexdetalhes', compact('anuncios','mservicos'));
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
                    $image = ($portifolio->image);
                    $diplomaCertificado = ($portifolio->diplomaCertificado);
                    $created_at = ($portifolio->created_at);
                    $updated_at = ($portifolio->updated_at);





          // return  "Olá".  $nome  ;

        if(isset($portifolio))  {
            return view('cliente.detalhesClientes.portifoliodetalhes', compact('portifolio','nome','idade','sexo',
            'cnpj',
            'MEI', 'endereco', 'cep','exp', 'aboutMe','image','id','diplomaCertificado','created_at','updated_at'));
        }
         else{
             return redirect('/home');
        }


//          return json_encode($portifolios);





    }



    public function whoanunciacontacts ($id)

    {

        

         $anuncios = ( DB::select('SELECT * from anuncios where id =' . $id )[0]);
                     $titulo = ($anuncios->titulo);
                     $categoria = ($anuncios->categoria);




        $portifolio = ( DB::select('SELECT * from portifolio where idDoAnuncio =' . $id )[0]);
                    $email = ($portifolio->email);
                    $telefone = ($portifolio->telefone);
                    $nameAnunciante = ($portifolio->name);



        if(isset($portifolio))  {
            return view('cliente.detalhesClientes.contatodetalhes',
            compact('portifolio','email','telefone','id','nameAnunciante','anuncios','titulo','categoria'));
        }
         else{
             return redirect('/cliente');
        }
        
    }



        public function avaliar(updatecomentValidationFormRequest $request)
        {



        $avaliar = Detalhe::create($request->all());

        // return redirect()->route('cliente.dashboard');

        if($avaliar)
        {
          return redirect()
                   ->route('cliente.dashboard')
                   ->with('success', 'Sucesso ao avaliar !');
        }

        else 
        {  
           return redirect() 
           ->back()
           ->with('error', 'Falha ao avaliar anunciante :(');
        }



        }


        public function download($file_name) {

            $file_name;
           $file_path = public_path('storage/imagens/'.$file_name);
           return response()->download($file_path);

         }




        public function search  (Request $request)
        {

            $estadosanuncios = ufcadastrados::all();
            $categorias = Categoria::all();


            $dataForm = $request->except('_token');

            $titulo =   $request->titulo;
            $text =   $request->text;
            $sobre =   $request->sobre;
            $categoria =   $request->categoria;


            $a = "a";


                $text =  $request->text;

                if($text == '')  {
                  $titulo == '';
                  $sobre == '';
                  $categorias == '';

        //    $anuncios = Anuncio::where('sobre', 'LIKE', "")->paginate(4);
                $anuncios = Anuncio::paginate(4);

             return view('cliente.todosanuncioscli',compact('anuncios','sobre','categorias','dataForm','estadosanuncios'));
      }

            else {

                 if (isset($text)) {

                $anuncios = Anuncio::where('titulo', 'LIKE', "%{$text}%")->get();
                return view('cliente.todosanuncioscli',compact('anuncios','text','categorias','a','estadosanuncios'));

                    }



                    if(isset($text)){
            $anuncios = Anuncio::where('titulo', 'LIKE', "%{$text}%")->get();
            return view('cliente.todosanuncioscli',compact('anuncios','text','categorias','a','estadosanuncios'));
            }
            

            
                if (isset($text)) {

            $anuncios = Anuncio::where('titulo', 'LIKE', "%{$text}%")->get();
            return view('cliente.todosanuncioscli',compact('anuncios','text','categorias','a','estadosanuncios'));


                }




            }


        }

        public function filtragem  (Request $request)
        {



         $categorias = Categoria::all();

            $titulo =   $request->titulo;
            $sobre =   $request->sobre;
            $categoria =   $request->categoria;

        

            if($titulo == ''  && $sobre == '' &&  $categoria == '')
                 return redirect()
                             ->back()
                             ->with('error', 'conteúdo não encontrado');


            else {

                 if (isset($sobre)) {


                $anuncios = Anuncio::where('sobre', 'LIKE', "%{$sobre}%")->get();
                return view('cliente.CfiltrarAnuncios',compact('anuncios','sobre','categorias'));

                    }



                    if(isset($categoria)){
            $anuncios = Anuncio::where('categoria', 'LIKE', "%{$categoria}%")->get();
            return view('cliente.CfiltrarAnuncios',compact('anuncios','categoria','categorias'));
            }

                    if (isset($titulo)) {

                $anuncios = Anuncio::where('titulo', 'LIKE', "%{$titulo}%")->get();
                return view('cliente.CfiltrarAnuncios',compact('anuncios','titulo','categorias'));


                    }


             }

    }


    public function contactarAnunciante (Request $request)
    {
        event(new HomeEvent("Ola mundo")); 

        // return   "fim";
        // return $request;
           $nome = $request->fname;
         $sobrenome = $request->lname;
         $email =  $request->email;
         $emailDestinatario =  $request->emailDestinatario;
        
         return "Email enviado com sucesso !";
        
    }


        

        public function indextodosanuncioscliente ()
        {


            $anuncios = Anuncio::paginate(20);
            $categorias = Categoria::all();
            $estadosanuncios = ufcadastrados::all();

            $normal = '';
            
           //   $anuncios = Anuncio::paginate($this->totalPage);
           return view('cliente.todosanuncioscli', compact('anuncios','categorias','normal','estadosanuncios'));


        }


        


          public function filtragem2cli  (Request $request, ClienteController $historic)
       {
            // return "filtragem2";
            $dataForm = $request->except('_token');
            $estadosanuncios = ufcadastrados::all();
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
                $anuncios = Anuncio::paginate(10);
                
            return view('cliente.todosanuncioscli',compact('anuncios','sobre','categorias','dataForm','estadosanuncios'));

            }

           else {
                
            $anuncios =  Anuncio::where(function ($query) use ($dataForm, $titulo, $categoria, $estadosanuncio) {

                if(isset($dataForm['titulo']))  // vericamos se este valor existe
                $anuncios = $query->where('titulo', 'LIKE', "%{$titulo}%");             //aqui faremos um filtro pra ele seja where , orwhere ...


                if(isset($dataForm['categoria']))
                $anuncios = $query->where('categoria', 'LIKE', "%{$categoria}%");
                
                if(isset($dataForm['estadosanuncio']))
                $anuncios =   $query->where('UF', 'LIKE', "%{$estadosanuncio}%");

            })->paginate(10);
            return view('cliente.todosanuncioscli',compact('anuncios','sobre','categorias','dataForm','estadosanuncios'));

         }

       }


          public function categoria ($name)
          {


               // return $name;
                $cats = $name ;
               $categorias = Categoria::all();
               $estadosanuncios = ufcadastrados::all();


               $anuncios = Anuncio::where('categoria', 'LIKE', "%{$name}%")->orderBy('vip','desc','1')->paginate(5);
               return view('cliente.todosanuncioscli',compact('anuncios','categorias','name','estadosanuncios'));


           // $categorias = Categoria::orderBy('name', 'asc', 'LIMIT 3')->get();

          }





        public function listarcategoriascli()
            {

                
              $categorias = Categoria::all();

                return view('cliente.listarcategoriascli',compact('categorias'));

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
                                ->route('catscli')
                        ->with('success', 'Sugestão enviada com sucesso!');
                    }

                else {
                        return "false";
                }


          }


}
