<?php

namespace App\Http\Middleware;

use Closure;
use DB;
use Log;
use App\Anuncio;

class ContatosAcessosMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */


    public function handle($request, Closure $next )
    {

        /** do interessado */
        $IdDequemAcessa = auth() ->guard('cliente')-> user()->id ;
        $NomeDequemAcessa = auth() ->guard('cliente')-> user()->name ;
        $emailDequemAcessa = auth() ->guard('cliente')-> user()->email ;
    //    return response ($quemAcessa);

        /** do anuncio */
        $id = $request->id;
        $a =$anuncioemquestao = Anuncio::where('id', '=', $id)->get('id');

            $a = ($a[0]->id);






            $id = $request->id;
            $t =$tituloemquestao = Anuncio::where('id', '=', $id)->get('titulo');

             $t = ($t[0]->titulo);


            $c =$categoriaemquestao = Anuncio::where('id', '=', $id)->get('categoria');

            $c = ($c[0]->categoria);




        // return response ($anuncioID);


        /** do anunciante */

         $portifolio = ( DB::select('SELECT * from portifolio where idDoAnuncio =' . $id )[0]);

          $idDoAnuncio = $portifolio->idDoAnuncio;
          $users_id = $portifolio->users_id;
          $nomeAnunciante = $portifolio->name;
          $idDoUser = $portifolio->idDoUser;  // FOREIGN KEY PRESENTE NA TABLE ANUNCIOS
          $idade = $portifolio->idade;
          $sexo = $portifolio->sexo;
          $cpf = $portifolio->cpf;
          $cnpj = $portifolio->cnpj;
          $cep = $portifolio->cep;
          $MEI = $portifolio->MEI;
          $endereco = $portifolio->endereco;
          $complemento = $portifolio->complemento;
          $email = $portifolio->email;
          $telefone = $portifolio->telefone;
          $aboutMe = $portifolio->aboutMe;
          $exp = $portifolio->exp;
          $image = $portifolio->image;
          $diplomaCertificado = $portifolio->diplomaCertificado;
          




        //   return response ($nomeAnunciante);




            /** varoaveis */
            $CampoNome = 2;
            $accessNumber = 3;






       $Sugestion =   DB::insert ('INSERT INTO acessos(nome,access,idDoAnuncio,users_id,
       nomeAnunciante,idDoUser,idade,sexo,cpf,cnpj,cep,MEI,endereco,complemento,email,telefone,aboutMe,exp,image,diplomaCertificado,idDeQuemAcessa,NomeDeQuemAcessa,categoria,anuncioId,tituloAnuncio,emailDequemAcessa)  

         VALUES (:nome, :access, :idDoAnuncio, :users_id, :nomeAnunciante, :idDoUser, :idade, :sexo, :cpf, :cnpj, :cep, :MEI, :endereco, :complemento, :email, :telefone, :aboutMe, :exp, :image, :diplomaCertificado, :idDeQuemAcessa,  :NomeDeQuemAcessa, :categoria, :anuncioId, :tituloAnuncio, :emailDequemAcessa )' ,
          [


           'nome' =>$CampoNome,
           'access' => $accessNumber,
           'idDoAnuncio' => $idDoAnuncio,
           'users_id' => $users_id,
           'nomeAnunciante' => $nomeAnunciante,
           'idDoUser' => $idDoUser,
           'idade' => $idade,
           'sexo' => $sexo,
           'cpf' => $cpf,
           'cnpj' => $cnpj,
           'cep' => $cep,
           'MEI' => $MEI,
           'endereco' => $endereco,
           'complemento' => $complemento,
           'email' => $email,
           'telefone' => $telefone,
           'aboutMe' => $aboutMe,
           'exp' => $exp,
           'image' => $image,
           'diplomaCertificado' => $diplomaCertificado,
           'idDeQuemAcessa' => $IdDequemAcessa,
           'NomeDeQuemAcessa' => $NomeDequemAcessa,
            'categoria' => $c,
            'anuncioId' => $a,
            'tituloAnuncio' => $t,
            'emailDequemAcessa' => $emailDequemAcessa,


       ]);



//        if  ($Sugestion == true  ){

//            return response('+1');

//        }


//    else {
//            return "false";
//    }



//         Log::debug("Passou pelo TerceiroMiddleware [nome  = $nome], $idade");

       return $next($request);
   }

    }
