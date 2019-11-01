<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Anuncio;

use App\Detalhe;

use App\Categoria;

use App\Acesso;

use acessos;

use App\contatosclick;

use App\Http\Requests\AnunciosValidationFormRequest;

use App\Http\Requests\profileUpdateValidationFormRequest;

use Storage;

use Image;

use DB;
use Auth;




class ControladorMeusServicos extends Controller
{
    public function index()
    {



        // exibindo "meus anuncios"
        $idUsuarioLogado = Auth::user()->id;


        $mservicos = Anuncio::where('users_id',$idUsuarioLogado)->orderBy('visualizacoes','DESC')->get();

        return view('paineladministrador.meuspostspainel', compact('mservicos'));

    }





    public function show($id)
    {


    }

    public function create()
    {

    }



    public function store(AnunciosValidationFormRequest $request)
    {          //CADASTRANDO O ANUNCIO
        //    anterior
        /*Anuncio::create($request->all());
        return redirect()->route('anuncios');*/




        // $path =  $request->file('image')->store('imagens','public');
        $path =  $request->file('image')->store('imagens','public');



            $input = $request->all();


    if($request->file('image'))
    {       $path = Storage::disk('public')->put('imagens',$request->file('image'));
            $input['image'] = $path;

            $img = Image::make('storage/'. $path);

            $img->resize(2, 2);

    }






        $post = new Anuncio();
        //valores recebidos por request
        $post->titulo = $request->input('titulo');
        $post->categoria = $request->input('categoria');
        $post->endereco = $request->input('endereco');
        $post->complemento = $request->input('complemento');
        $post->municipio = $request->input('municipio');
        $post->cep = $request->input('cep');
        $post->UF = $request->input('UF');
        $post->bairro = $request->input('bairro');
        $post->mei = $request->input('mei');
        $post->users_id = $request->input('users_id');
        $post->sobre = $request->input('sobre');
        $post->image = $path; // pode passar o  campo vazio,path é a localizacao
        $response =  $post->save();

            if($post->save()== true )
                return redirect()
                        ->route('servicosindex')
                        ->with('success',  'O anuncio foi cadastrado com sucesso!' );

            else
                return "nao deu";


                if($response['success'])
                    return redirect()
                                ->route('servicosindex')
                                ->with('success', $response['message']);

                return redirect()
                            ->back()
                            ->with('error', $response['message']);


        // return redirect('/paineladministrador');


    }



    public function edit($id)
    {



        // abre o local, forms onde serao enviadas as informações para a edição.
        $categoria = Categoria::all();
        $mservicos = Anuncio::find($id);

        // $products = Product::pluck('name', 'id');

        if(isset($mservicos))  {
            return view('paineladministrador.Newpainelvendedor', compact('mservicos','categoria'));
        }
        else{
             return redirect('/detalhes');
        }

    }



     public function update(profileUpdateValidationFormRequest $request, $id)
    {
        //utilizado para gravar




            $prod = Anuncio::find($id);
             $prod->image;


           if ($path = $request->file('image')== null)
                $path = $prod->image;

             else

             $path = $request->file('image')->store('imagens','public') ;

            $prod = Anuncio::find($id);
            if(isset($prod)){
            $prod->image = $path;
            $prod->titulo = $request->input('titulo');
            $prod->categoria = $request->input('categoria');
            $prod->endereco = $request->input('endereco');
            $prod->complemento = $request->input('complemento');
            $prod->municipio = $request->input('municipio');
            $prod->cep = $request->input('cep');
            $prod->UF = $request->input('UF');
            $prod->bairro = $request->input('bairro');
            $prod->sobre = $request->input('sobre');
            $updateanuncios = $prod->save();

            if($updateanuncios){
            return redirect()
                        ->route('servicosindex')
                        ->with('success',  'O anuncio foi atualizado com sucesso!' );
            }


            else
            {
                return redirect()
                            ->back()
                            ->with('error', $response['message']);

            }
       }

    }


    public function destroy($id)
    {
        $deleteanuncios =  $mservicos = Anuncio::find($id)->delete();

        // return redirect()
        //         ->route('servicosindex') ;


            if($deleteanuncios){
                return redirect()
                            ->route('servicosindex')
                            ->with('success',  'O anuncio foi deletado com sucesso!' );
                }


                else
                {
                    return redirect()
                                ->back()
                                ->with('error', $response['message']);

                }



    }

    public function chamarPainel()
    {
             return view('paineladministrador.indexpainel');
    }




        public function indexMeusFeedbacks()
    {

         $idUsuarioLogado = Auth::user()->id;


         $mservicos = Detalhe::where('users_id',$idUsuarioLogado)->get();

         return view('paineladministrador.meusfeedbackspainel', compact('mservicos'));



    }



        public function VerPostagens($id)
    {
          /* este mservicos se refere à tabela tbl comentarios*/
        $mservicos = DB::select('SELECT * FROM whoavalia where anuncios_id = '.$id);
        $anuncios = Anuncio::find($id);
        if(isset($anuncios))  {
            return view('detalhes.indexdetalhes', compact('anuncios','mservicos','id'));
        }
        else{
             return redirect('/paineladministrador');
        }

    }


    public function myviews ()
    {



        $id = Auth::user()->id;




        // $portifolio = ( DB::select('SELECT * from acessos where users_id =' . $id )[0]);
        // $idDoAnuncio = ($portifolio->idDoAnuncio);
        // $nome = ($portifolio->nome);
        // $telefone = ($portifolio->telefone);


        // $anuncios = ( DB::select('SELECT * from anuncios where id =' . $idDoAnuncio )[0]);

        // $nomeAnuncio = ($anuncios->titulo);
        // return $nomeAnuncio;


        $acessos = Anuncio::where('users_id',$id)->paginate(10);


        //   $anuncios = Anuncio::paginate($this->totalPage);

        //dashboard admin
        // return  view('admin.TelasAdministrador.acessarclientes',compact('clientes'));



        return view('paineladministrador.myviews',compact('acessos'));


    }


    public function anunciosemalta()
    {



        // $categorias = Categoria::orderBy('name', 'asc', 'LIMIT 3')->get();


        $acessos = Anuncio::orderBy('visualizacoes','DESC')->get();


        return view('paineladministrador.relatorios.anunciosemalta',compact('acessos'));



    }


    public function catsemalta()
    {


        $acessos = Categoria::orderBy('visualizacoes', 'desc')->get();

        return view('paineladministrador.relatorios.catsEmAlta',compact('acessos'));


    }





    public function acessos()
    {

        $id = Auth::user()->id;

            /*

            SELECT COUNT(*) as total, tituloAnuncio, users_id, categoria, email, anuncioId,
            from acessos
            GROUP BY tituloAnuncio
            ORDER BY total
            DESC;
            * */

        $acessos = contatosclick::select(DB::raw('COUNT(*) AS total, tituloAnuncio,users_id,categoria,
                                                email,anuncioId'))
                    ->where('users_id', $id)
                    ->groupBy('tituloAnuncio')
                    ->orderBy('total','DESC')
                    ->get();


        if(isset($acessos))  {


            return view('paineladministrador.relatorios.acessos', compact('acessos'));
        }
        else{

            return "saiu";

             return redirect('/detalhes');
        }




    }


}
