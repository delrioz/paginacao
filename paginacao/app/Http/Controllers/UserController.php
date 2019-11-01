<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Validation\Rule;


class UserController extends Controller
{


     public function profile()
  {
     
        return view('site.profile.profile');
  }


  public function profileUpdate(Request $request)
  {      
      
   
        // dd($request->all() );


        $user = auth()->user();

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
                      ->route('profile')
                      ->with('success', 'Sucesso ao atualizar !');
           }

           else 
           {  
              return redirect() 
              ->back()
              ->with('error', 'Falha ao atualizar perfil :(');
           }
     }

   //   public function profilevendedor()
   //   {
   //      return view('perfilvendedor', array('user' =>Auth::user()));

   //   }


      
      
}


