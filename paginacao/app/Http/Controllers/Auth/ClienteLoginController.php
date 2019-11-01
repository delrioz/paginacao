<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Cliente;
use Hash;



class ClienteLoginController extends Controller
{


  
     public function __construct()
    {
        $this->middleware('guest:cliente');
    }

    

    public function login (Request $request){
        $this->validate($request, [
            'email'    =>  'required|string',
            'password' => 'required',

        ]);
           //senha e login armazenadas em um  array

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];


        
        /* login o  <<attempt>>  faz uma tentativa de login*/ 

         $authOK = Auth::guard('cliente')->attempt($credentials, $request->remember);

        if($authOK){
            
            return redirect()->intended(route('cliente.dashboard'));

        }

        
        else {
              
            //   return redirect()->back()->withInputs($request->only('email','remember'));

            return redirect() 
            ->back()
            ->with('error', 'Não foi possível logar. Email e/ou senha estão incorretos');



        }


        //   //testando maneira 2 (deu certo)
             
        //   // 1º vai buscar a conta do usuário 
        //    $dados = cliente::where('email', $request->email)->first();

        //    $resultado = "";
            
            
        //    if(empty($dados)){
        //        $resultado = "Não existe essa conta de usuário";

               
        //    }

        //    else{
        //             //caso tenha sido encontrado usuario
                    
        //             if(Hash::check($request->password , $dados->password)){
        //                 $resultado = "Login com sucess.";
        //             }
        //             else{
        //                 $resultado = "Senha incorreta";

        //             }

        //    }


        //    return ($resultado);



    
    }





    public function index() 
    {   
        /* para onde será redirecionado após o registro  */
         return view("cliente.cliente-login");
    }


    

    // public function __construct(){
        
    //     $this->middleware('guest:cliente');
    // }



    // public function login (Request $request){
    //     $this->validate($request, [
    //         'email'    =>  'required|string',
    //         'password' => 'required',

    //     ]);

    //      $credentials = ['email' => $request->email,
    //                      'password' => $request->password
    //                     ];
    //     $authOK = Auth::guard('cliente')->attempt($credentials, $request->remember);
        
    //     if($authOK){

    //     }              return redirect()->intended(route('admin.dashboard'));


    //         return redirect()->back()->withInputs($request->only('email', 'remember'));
    
    // }
    


    // public function index() {
    //     return view("auth.login-adm");
    // }
}
