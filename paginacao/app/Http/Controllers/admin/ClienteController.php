<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Http\Controllers\Controller;
use App\Cliente;
use App\Anuncio;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

use App\Http\Requests\profileupdateclientesValidationFormRequest;

use App\Http\Requests\aocadastrarcliente;

USE DB;


 use Illuminate\Http\Request;



use Intervention\Image\Facades\Image;


class ClienteController extends Controller
{

     public function profile()
  {
     
        return view('site.profileCliente.profile');


  }



     public function VerPostagens($id)
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



  public function profileUpdate(profileupdateclientesValidationFormRequest $request)
  {       


       $customer = $request;


        // dd($request->all() ); 

          $user =  auth() ->guard('cliente')-> user();
        
          

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

   





        //      //dd ($NameFinal);

        //       // $request->file('image')  ou como nas linhas a seguir:
            
        //       // $request->image->store(); // cria com um nome específico



        $upload3 = $request->image->storeAs('users', $NameFinal);  //users é a pasta q será criada

        $upload = Image::make(public_path('storage/' . $upload3))->fit(300,300,null,'center');


        // $image->save

              
              if(!$upload)
                 return redirect()
                             ->back()
                             ->with('error', 'Falha ao fazer upload da imagem');

            
          }
            
          
           $update = $user->update($data);


           if($update)
           {
             return redirect()
                      ->route('clientepainel')
                      ->with('success', 'Sucesso ao atualizar !');
           }

           else 
           {  
              return redirect() 
              ->back()
              ->with('error', 'Falha ao atualizar perfil :(');
           }


  


     }
       
       public function InserirCliente(aocadastrarcliente $request)
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

   
         //  return redirect()->intended(route('cliente.login'));


         Auth::guard('cliente')->loginUsingId($novo->id);



         return redirect()
               ->route('cliente.login')
               ->with('success', 'Cadastrado com sucesso !');



       }


       

}


