<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Validation\Rule;
use Image;
use App\Http\Requests\profileupdateanunciantesValidationFormRequest;


use Illuminate\Support\Facades\Storage;



class UserController extends Controller
{


    public function profile()
    {

        return view('site.profile.profile');
    }


  public function profileUpdate(profileupdateanunciantesValidationFormRequest $request)
  {      // diplomaCertificado


        // dd($request->all() );


          $user = auth()->user();

          $data = $request->all();




        if($data['password'] != null)

            $data['password'] = bcrypt($data['password']);

        else

             unset($data['password']);


             /** validando diplomaCertificado */

            $data['diplomaCertificado'] = $user->diplomaCertificado;
            if ($request->hasFile('diplomaCertificado') && $request->file('diplomaCertificado')->isValid()) {

              // verificando se o campo "imagem" foi informado

             if ($user->diplomaCertificado)
                $name = $user->diplomaCertificado;
             else


            $name = $user->id.kebab_case($user->email);  //removendo espaços e caracteres especiais do nome.

             $extenstion = $request->diplomaCertificado->extension(); // retornando extensão do arquivo

             $nameFile = "{$name}.{$extenstion}"; // somando nome da imagem com a extensão

             $newnamefile = bcrypt($nameFile);

             $NameFinal = "{$newnamefile}.{$extenstion}";

             $data['diplomaCertificado'] = $NameFinal;


             //dd ($NameFinal);

              // $request->file('image')  ou como nas linhas a seguir:

              // $request->image->store(); // cria com um nome específico

              $upload = $request->diplomaCertificado->storeAs('imagens', $NameFinal);  //users é a pasta q será criada


              if(!$upload)
                 return redirect()
                             ->back()
                             ->with('error', 'Falha ao fazer upload do arquivo');

          }



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

            $upload2 = $request->image->storeAs('users', $NameFinal);  //users é a pasta q será criada


            if(!$upload2)
               return redirect()
                           ->back()
                           ->with('error', 'Falha ao fazer upload da imagem');

        }



          // atualizando

        $atts = [
           $update2 =  $user->update($data),
           $update = $user->update($data)

        ];

           if($atts)
           {
             return redirect()
                     ->route('paineladmvendedor')
                      ->with('success', 'Sucesso ao atualizar !');
           }

           else
           {
              return redirect()
              ->back()
              ->with('error', 'Falha ao atualizar perfil :(');
           }
     }





     public function profilevendedor()
     {

        return view('perfilvendedor', array('user' =>Auth::user()));

     }


     public function atualizarprofilevendedor (Request $request)
     {
            //upload o avatar
              $request;
            if($request->hasFile('image')){
               $image = $request->file('image');
               $filename = time() . '.' . $image->getClientOriginalExtension();
               Image::make($image)->resize(300, 300)->save(public_path('/uploads/avatars/'. $filename));

               $user = Auth::user();
               $user->image = $filename;
               $user->save();
            }

              return view('perfilvendedor', array('user' =>Auth::user()));


     }


   //   public function download2()
   //    {
   //        $user = auth()->user();


   //       // $user = Post::find($id);
   //       if (isset($user)){
   //       $path = Storage::disk('local')->getDriver()->getAdapter()->applyPathPrefix($user->image);
   //       return response()->download($path);
   //       }
   //       return redirect('');


   //       // ESTOU TENTANDO FAZER COM QUE DEPOIS DA PASTA DO DISCO PUBLIC PROCURE PELA PASTA "USERS"

   //    }

      public function download($file_name) {


         $file_path = public_path('storage/imagens/'.$file_name);
         return response()->download($file_path);

       }



      public function Userlogout()
      {
               auth()->logout();
               return redirect('/');

      }


      //logout com os guards
      // public function Userlogout()
      // {
      //    auth()->guard('users')->logout();
      //    return redirect('/');

      // }


    public  function adasdsad ()
    {
            return "dasdasdsadaas";

    }




   }
