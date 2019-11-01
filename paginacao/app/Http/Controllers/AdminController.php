<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;
use App\User;
use App\Anuncio;
use App\Cliente;
use App\Detalhe;
use App\Sugestoes;
use App\Admin;
use App\AnunTop;
use App\qtMei;
use App\contatosclick;
use App\report;


use App\Categoria;

use Hash;
use DB;

use Illuminate\Validation\Rule;
use Image;

use App\Http\Requests\criaranunciantesValidationFormRequest;

use App\Http\Requests\profileupdateanunciantesValidationFormRequest;


use App\Http\Requests\profileupdateclientesValidationFormRequest;

use App\Http\Requests\criandoclientesValidationFormRequest;


use App\Http\Requests\AnunciosValidationFormRequest;

use App\Http\Requests\profileUpdateValidationFormRequest;

use App\Acessos;


class AdminController extends Controller
{

    public function __construct()
    {
         $this->middleware('auth:admin');

    }
    public function index()
    {

        
        // qnd logado
        return  view('home');
    }


    public function indexadmin()
    {


        //dashboard admin
        return  view('admin.TelasAdministrador.indexdashboard');
    }


    public function acessarclientes()
    {
        $clientes = Cliente::paginate(10);
        //   $anuncios = Anuncio::paginate($this->totalPage);

        //dashboard admin
        return  view('admin.TelasAdministrador.acessarclientes',compact('clientes'));


    }



     public function destroyclientes($id)
    {
        $clientes = Cliente::find($id)->delete();
        // return view('admin.TelasAdministrador.indexdashboard');

        return redirect()->route('admin.acessar.clientes');

    }




    public function editclientes($id)
    {
        // abre o local, forms onde serao enviadas as informações para a edição.

        $clientes = Cliente::find($id);

        if(isset($clientes))  {
            return view('admin.TelasAdministrador.comandosclientes.show', compact('clientes'));
        }
        else{
            return "nao tem";
            return redirect()->route('admin.acessar.clientes');
        }

    }


     public function updateclientes(profileupdateclientesValidationFormRequest $request, $id)
    {
         /**user a ser editado */


            $user = Cliente::find($id);

           $data =  $request->all();

           if($data['password'] != null)
               $data['password'] = bcrypt($data['password']);
           else
                unset($data['password']);




        //    $update = Cliente::find($id)->update($data);


        $data['image'] = $user->image;

        if($request->hasFile('image') && $request->file('image')->isValid()) {
            if ($user->image != null)
                 $name = $user->image;
            else
             $name = $user->id.kebab_case($user->name);


             $extenstion = $request->image->extension(); // retornando extensão do arquivo

             $nameFile = "{$name}.{$extenstion}"; // somando nome da imagem com a extensão

             $newnamefile = bcrypt($name);

             $NameFinal = "{$newnamefile}.{$extenstion}";

             $data['image'] = $NameFinal;


            //  $data['image'] = $NameFinal;

             $upload = $request->image->storeAs('users', $NameFinal);


              if(!$upload)
                 return redirect()
                        ->back()
                        ->with('error', 'Falha ao fazer upload da imagem');

        }

           $update = $user->update($data);


            if($update)
               return redirect()
                        ->route('admin.acessar.clientes')
                        ->with('success', 'Sucesso ao atualizar!');

               return redirect()
                        ->back()
                        ->with('error', 'Falha ao atualizar o perfil...');

     }




    public function updateanunciantes(profileupdateanunciantesValidationFormRequest $request, $id)
    {


         /**user a ser editado */

        $user = User::find($id);


         $data = $request->all();

        if($data['password'] != null)

            $data['password'] = bcrypt($data['password']);

        else

             unset($data['password']);


            $data['image'] = $user->image;
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
              // verificando se o campo "imagem" foi informado

             if ($user->image)
                $name = $user->image;
             else

            $name = $user->id.kebab_case($user->email);  //removendo espaços e caracteres especiais do nome.

             $extenstion = $request->image->extension(); // retornando extensão do arquivo

             $nameFile = "{$name}.{$extenstion}"; // somando nome da imagem com a extensão

             $newnamefile = bcrypt($nameFile);

             $NameFinal = "{$newnamefile}.{$extenstion}";

             $data['image'] = $NameFinal;


             //dd ($NameFinal);

              // $request->file('image')  ou como nas linhas a seguir:

              // $request->image->store(); // cria com um nome específico

              $upload = $request->image->storeAs('users', $NameFinal);  //users é a pasta q será criada


              if(!$upload)
                 return redirect()
                             ->back()
                             ->with('error', 'Falha ao fazer upload da imagem');


          }


           $update = $user->update($data);


           if($update)
           {
             return redirect()
                      ->route('admin.acessar.vendedores')
                      ->with('success', 'Sucesso ao atualizar !');
           }

           else
           {
              return redirect()
              ->back()
              ->with('error', 'Falha ao atualizar perfil :(');
           }

     }



      public function storeclientes( criandoclientesValidationFormRequest $request, Cliente $cliente)
    {


        // Cliente::create($request->all());
        // return"1";
        // return redirect()->route('index');


        $data =  $request->all();
        $data['password'] = Hash::make($data['password']);
       $cria =   $usuario = \App\Cliente::create($data);


            // $insert = $cli->save();



        //   $name = $request->name;
        //   $email = $request->email;
        //   $password = $request->password;
        // return  $image = $request->image;


        //   $novo = new Cliente;
        //   $novo->name = $name;
        //   $novo->email =  $email;
        //   $novo->password = Hash::make($request['password']);
        //   $novo->image = 'default.png';
        //   $novo->save();

            if ($cria)
            return redirect()->route('admin.acessar.clientes')
                                  ->with('success', 'Sucesso ao adicionar Usuário !');

             else {

                    return redirect()
                        ->route('admin.acessar.clientes')
                        ->with('error', 'Falha ao atualizar perfil :(');


             }




    }






    public function acessarvendedores()
    {
         $anunciantes = User::paginate(10);
        //   $anuncios = Anuncio::paginate($this->totalPage);

        //dashboard admin
        return  view('admin.TelasAdministrador.acessarvendedores',compact('anunciantes'));

    }




         public function destroyanunciantes($id)
    {
        $anunciantes = User::find($id)->delete();
        // return view('admin.TelasAdministrador.indexdashboard');

        return redirect()->route('admin.acessar.vendedores');

    }




        public function visualizaranunciantes($id)
    {
        // abre o local, forms onde serao enviadas as informações para a edição.

        $anunciantes = User::find($id);

        if(isset($anunciantes))  {
            return view('admin.TelasAdministrador.comandosvendedores.visualizar', compact('anunciantes'));
        }
        else{

            return redirect()->route('admin.acessar.vendedores');
        }

    }



        public function novoanunciante()
    {
        // abre o local, forms onde serao enviadas as informações para a edição.



        return  view('admin.TelasAdministrador.comandosvendedores.novoanunciante');

        return redirect()->intended(route('admin.acessar.vendedores'));


    }



          public function storeanunciantes(criaranunciantesValidationFormRequest $request)
{

             $data =  $request->all();
            $data['password'] = Hash::make($data['password']);
            $cria= $usuario = \App\User::create($data);



        // return redirect()->intended(route('admin.acessar.vendedores'));


        if ($cria)
        return redirect()->route('admin.acessar.vendedores')
                              ->with('success', 'Sucesso ao adicionar Anunciante !');

         else {

                return redirect()
         ->route('admin.acessar.vendedores')
          ->with('error', 'Falha ao atualizar perfil :(');


         }




    }


           public function cadastraranunciantes($id)
    {
        
        // abre o local, forms onde serao enviadas as informações para a edição.
        $anunciantes = User::find($id);

        if(isset($anunciantes))  {
            return view('admin.TelasAdministrador.comandosvendedores.profile', compact('anunciantes'));
        }
        else{
            return "nao tem";
            return redirect()->route('admin.acessar.vendedores');
        }

    }

    



     public function profileupdate(Request $request, $id)
  {
            /**user a ser editado */


            $user = User::find($id);


        $data = $request->all();

        if($data['password'] != null)

            $data['password'] = bcrypt($data['password']);

        else

             unset($data['password']);


            $data['image'] = $user->image;
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
              // verificando se o campo "imagem" foi informado

             if ($user->image)
                $name = $user->image;
             else

            $name = $user->id.kebab_case($user->email);  //removendo espaços e caracteres especiais do nome.

             $extenstion = $request->image->extension(); // retornando extensão do arquivo

             $nameFile = "{$name}.{$extenstion}"; // somando nome da imagem com a extensão

             $newnamefile = bcrypt($nameFile);

             $NameFinal = "{$newnamefile}.{$extenstion}";

             $data['image'] = $NameFinal;


             //dd ($NameFinal);

              // $request->file('image')  ou como nas linhas a seguir:

              // $request->image->store(); // cria com um nome específico

              $upload = $request->image->storeAs('users', $NameFinal);  //users é a pasta q será criada


              if(!$upload)
                 return redirect()
                             ->back()
                             ->with('error', 'Falha ao fazer upload da imagem');


          }


           $update = $user->update($data);


           if($update)
           {
             return redirect()
                      ->route('cliente')
                      ->with('success', 'Sucesso ao atualizar !');
           }

           else
           {
              return redirect()
              ->back()
              ->with('error', 'Falha ao atualizar perfil :(');
           }
     }

       public function InserirCliente(Request $request)
       {
          // inserir um usuário na base de dados

            $request;
            $name = $request->name;
            $email = $request->email;
            $password = $request->password;
            $image = $request->image;


            $novo = new Cliente;
            $novo->name = $name;
            $novo->email =  $email;
            $novo->password = Hash::make($request['password']);
            $novo->image = $image;
            $novo->save();


            return redirect()->intended(route('cliente.login'));



       }







          public function destroyanuncios($id)
    {
        $anuncios = Anuncio::find($id)->delete();
        // return view('admin.TelasAdministrador.indexdashboard');

        return redirect()->route('admin.acessar.anuncios');

    }


     public function editanuncios($id)
     {

        // abre o local, forms onde serao enviadas as informações para a edição.

        $categoria = Categoria::all();
        $anuncios = Anuncio::find($id);

        if(isset($anuncios))  {
            return view('admin.TelasAdministrador.comandoanuncios.show', compact('anuncios','categoria'));
        }
        else{
            return "nao tem";
            return redirect()->route('admin.acessar.clientes');
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
            $prod->save();

            return redirect()
                            ->route('admin.acessar.anuncios')
                        ->with('success', 'Sucesso ao atualizar!');

            //    return redirect()
            //             ->back()
            //             ->with('error', 'Falha ao atualizar o perfil...');



       }

    }







        public function newanuncio ()
        {
            $categoria = Categoria::all();
            return  view('admin.TelasAdministrador.comandoanuncios.anunciarpostsadm',compact('categoria'));

        }

        public function store(AnunciosValidationFormRequest $request)
    {

           //CADASTRANDO O ANUNCIO

        //    anterior
        /*Anuncio::create($request->all());
        return redirect()->route('anuncios');*/


        $path =  $request->file('image')->store('imagens','public');
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
                        ->route('admin.acessar.anuncios')
                        ->with('success',  'O anuncio foi cadastrado com sucesso!' );

            else
                return "nao deu";


                if($response['success'])
                    return redirect()
                                ->route('admin.acessar.anuncios')
                                ->with('success', $response['message']);

                return redirect()
                            ->back()
                            ->with('error', $response['message']);


        // return redirect('/paineladministrador');            return "djasmfjsdnfjds";



    }






        public function navegando()
        {

            $indice = 10;

            $anuncios = Anuncio::orderBy('visualizacoes', 'desc', 'visualizacoes')->paginate($indice);

            // $anuncios = Anuncio::paginate(10);
            //   $anuncios = Anuncio::paginate($this->totalPage);

            //dashboard admin
            return  view('admin.TelasAdministrador.navegando',compact('anuncios'));

        }



        public function acessartemassugeridos()
        {
            // //dashboard admin

            // //         $Sugestoes = Sugestoes::paginate(10);

            //   $sugestoes = DB::select('SELECT * FROM sugestoes')->get();

            // //   $sugestoes = ( DB::select('SELECT * FROM sugestoes')[0]);
            // //       ($sugestoes->categoria);
             $indice = 10;
            $sugestoes = Sugestoes::paginate($indice);


             return  view('admin.TelasAdministrador.acessartemassugeridos',compact('sugestoes'));


        }


           public function destroySugestao($id)
        {
               $sugestoes = Sugestoes::find($id)->delete();
            // return view('admin.TelasAdministrador.indexdashboard');

            return redirect()->route('admin.acessar.temassugeridos');

        }




            public function visualizarsugestoes($id)
        {
            // abre o local, forms onde serao enviadas as informações para a edição.

            $sugestoes = Sugestoes::find($id);

            if(isset($sugestoes))  {

                return  view('admin.TelasAdministrador.comandosugestoes.viewsuggestion',compact('sugestoes'));
            }
            else{

                return redirect()->route('admin.acessar.temassugeridos');
            }

        }



        public function login()
        {
            return  view('auth.login-adm');
        }


        public function postLogin(Request $request)
        {

        $this->validate($request, [
                'email'    =>  'required|string',
                'password' => 'required',

            ]);

            $credentials = $request->only( ['email' => $request->get('email'),
                            'password' => $request->get('password')
                            ]);


        // dd($request->get('password'));

            if( auth()-> guard('cliente')->attempt($credentials)) {
                return redirect('/admin');

            } else {
                // return redirect()->back()->withInputs($request->only('email', 'remember'));
                return redirect('/admin/login')
                ->withErrors(['errors' => 'Login Inválido!'])
                ->withInput();

            }


        }



            public function newadmin ()
        {
            return  view('admin.TelasAdministrador.comandosnewadmins.newadmin');

        }



            public function storeadmin (Request $request)
        {


            //   $anunciantes = User::paginate(10);

                 $data =  $request->except('_token','password_confirmation');
                $data['password'] = Hash::make($data['password']);

                // YourModel:: forceCreate($request->all());

                $usuario = \App\Admin::forceCreate($data);


            return redirect()->intended(route('admin.acessar.admin'));


        }


        public function acessaradmin()
        {
            $admins = Admin::paginate(10);
            //   $anuncios = Anuncio::paginate($this->totalPage);

            //dashboard admin
            // return  view('admin.TelasAdministrador.acessarclientes',compact('clientes'));

            return  view('admin.TelasAdministrador.acessaradmins',compact('admins'));

        }


        public function destroyadmins($id)
        {

            $admins = Admin::find($id)->delete();

            // return view('admin.TelasAdministrador.indexdashboard');

            return redirect()->route('admin.acessar.admin');

        }


        public function editadmins($id)
        {
            // abre o local, forms onde serao enviadas as informações para a edição.

            // $clientes = Cliente::find($id);

            $clientes = Admin::find($id);


            if(isset($clientes))  {

                return  view('admin.TelasAdministrador.comandosnewadmins.editnewadmin',compact('clientes'));

            }
            else{
                return "nao tem";
                return redirect()->route('admin.acessar.clientes');
            }



        }



        public function updateadmins(Request $request, $id)
        {
             /**user a ser editado */

             $user = Admin::find($id);


               $data =  $request->all();

               if($data['password'] != null)
                   $data['password'] = bcrypt($data['password']);
               else
                    unset($data['password']);



               $update = $user->update($data);


               if($update)
               return redirect()
                        ->route('admin.acessar.admin')
                        ->with('success', 'Sucesso ao atualizar!');

               return redirect()
                        ->back()
                        ->with('error', 'Falha ao atualizar o perfil...');



         }
         

         public function acessarcats()

         {
              $indice  = 10;

               $anuncios = Categoria::orderBy('visualizacoes', 'desc')->paginate($indice);

               //   $anuncios = Anuncio::paginate($this->totalPage);

               //dashboard admin
               return  view('admin.TelasAdministrador.acessarcategorias',compact('anuncios'));


         }


         public function destroycats($id)
         {

             $admins = Categoria::find($id)->delete();

             // return view('admin.TelasAdministrador.indexdashboard');


             return redirect()->route('admin.acessar.cats');

         }



         public function editcats($id)
         {

             // abre o local, forms onde serao enviadas as informações para a edição.

             $cats = Categoria::find($id);

             if(isset($cats))  {
                 return view('admin.TelasAdministrador.comandocategorias.show', compact('cats'));
             }

             else{
                 return "nao tem";
                 return redirect()->route('admin.acessar.cats');
             }


         }



         public function updatecats(Request $request, $id)
        {
             /**user a ser editado */


               $cat = Categoria::find($id);

               $data =  $request->all();

               $update = $cat->update($data);


               if($update)
               return redirect()
                        ->route('admin.acessar.cats')
                        ->with('success', 'Sucesso ao atualizar!');

               return redirect()
                        ->back()
                        ->with('error', 'Falha ao atualizar o perfil...');



         }




         public function storecats (Request $request)
         {


             //   $anunciantes = User::paginate(10);

                  $data =  $request->except('_token','password_confirmation');

                 // YourModel:: forceCreate($request->all());

                 $cats = \App\Categoria::forceCreate($data);



                 if($cats)
                 return redirect()
                          ->route('admin.acessar.cats')
                          ->with('success', 'Sucesso ao Adicionar Categoria!');

                 return redirect()
                          ->back()
                          ->with('error', 'Falha ao atualizar o perfil...');




         }


         public function qtsCadastrados()
         {



            $portifolio1 = ( DB::select('SELECT * from somandocadastrados' )[0]);

             $total2 = ($portifolio1->TOTAL);



          // return  "Olá".  $nome  ;

        if(isset($portifolio1))  {
            return view('admin.TelasAdministrador.totalCadastrados', compact('portifolio1',
                 'total2'));
        }

         else{
             return redirect('/home');
        }

     }


     public function anuntop()
     {
        // $portifolio = AnunTop::paginate(30);


        // /** o que tinha na view que criei mas perdi o codigo escrito */
            $portifolio = contatosclick::select(DB::raw('COUNT(*) AS total, tituloAnuncio,users_id,categoria,
            email,anuncioId'))

            ->groupBy('tituloAnuncio')
            ->orderBy('total','DESC')
            ->paginate(10);

        return  view('admin.TelasAdministrador.anuntop',compact('portifolio'));


     }


     public function anunciantesOrderBy ()
     {

        /**apenas dados de usuários mais acessados */

        $portifolio = AnunTop::paginate(10);


        /** o que tinha na view que criei mas perdi o codigo escrito */


            $portifolio = contatosclick::select(DB::raw('COUNT(*) AS total, tituloAnuncio,users_id,categoria,
            email,anuncioId,MEI'))

            ->groupBy('email')
            ->orderBy('total','DESC')
            ->paginate(10);


        return  view('admin.TelasAdministrador.Orderanuntop',compact('portifolio'));


     }


     public function qtMei ()
     {

        $anunciantes = User::Where('Mei','Sim')->paginate(10);


        return  view('admin.TelasAdministrador.qtMei',compact('anunciantes'));


     }


        public function oqusuariosprocuram()
        {


            // SELECT COUNT(*) as total, tituloAnuncio, users_id as idDoAnunciante, categoria, email as emaildoAnunciante, anuncioId, NomeDeQuemAcessa, emailDequemAcessa
            // from acessos
            // GROUP BY tituloAnuncio
            // ORDER BY total
            // DESC;

//             SELECT COUNT(*) as total , tituloAnuncio, users_id as idDoAnunciante, categoria, email as emaildoAnunciante, anuncioId,
// idDeQuemAcessa, NomeDeQuemAcessa, emailDequemAcessa, tituloAnuncio FROM acessos GROUP BY emailDequemAcessa;

        $acessos = acessos::select(DB::raw('COUNT(*) AS total, tituloAnuncio,users_id as idDoAnunciante,categoria,email as emaildoAnunciante, anuncioId,
                                idDeQuemAcessa,NomeDeQuemAcessa, emailDequemAcessa, tituloAnuncio'))
                                ->groupBy('emailDequemAcessa')
                                ->groupBy('tituloAnuncio')
                                ->orderBy('total','DESC')
                                ->paginate(10);


            if(isset($acessos))  {


            return view('admin.TelasAdministrador.acessarOqUsuariosPesquisam', compact('acessos'));
            }

            else{

            return "saiu";

            return redirect('/detalhes');
            }
        }

        public function logout ()
        {
            auth()->guard('admin')->logout();
            return redirect('/');
        }


        public function  Ngerais ()

        {

            $AnunNumero = User::select(DB::raw('COUNT(*) AS total'))
            ->paginate(10);


            $CliNumero = Cliente::select(DB::raw('COUNT(*) AS total'))
            ->paginate(10);

            $MEInumero = User::select(DB::raw('COUNT(*) AS total'))
            ->where('MEI', 'Sim')
            ->get();

            $NumeroAnuncios = Anuncio::select(DB::raw('COUNT(*) AS total'))
            ->paginate(10);


            return  view('admin.TelasAdministrador.Ngerais',compact('AnunNumero','CliNumero','MEInumero','NumeroAnuncios'));


        }


        public function Pregiao ()
        {

          $estados = Anuncio::select(DB::raw('COUNT(*) AS total, titulo,categoria,municipio,UF'))
                                  ->groupBy('UF')
                                  ->orderBy('total','DESC')
                                  ->paginate(10);


              return view('admin.TelasAdministrador.Pregiao', compact('estados'));

        }

        public function PregiaoSearch()
        {
          return 1;



        }



        public function acessarreports ()
        {

          $reports = report::select(DB::raw('title, moreAbout,emailDeQmAnuncia,created_at,id'))
                                  ->paginate(10);

          return view('admin.TelasAdministrador.acessarreports', compact('reports'));

        }



        public function editreports($id)
        {


            // abre o local, forms onde serao enviadas as informações para a edição.

            $reports = report::find($id);


            if(isset($reports))  {
                return view('admin.TelasAdministrador.comandoreports.show', compact('reports'));
            }

            else{
                return "nao tem";
                return redirect()->route('admin.acessar.reports');
            }


        }


}
