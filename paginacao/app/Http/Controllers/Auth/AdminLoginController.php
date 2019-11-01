<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class AdminLoginController extends Controller
{

    public function __construct(){

        $this->middleware('guest:admin');

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
        /* login o  <<attempt>>  faz uma tentativa de login*/
            /* os guards estão definidos no arquivo Auth.php e atraves dele selecionamos as tabelas
            as quais queremos logar*/

         $authOK = Auth::guard('admin')->attempt($credentials, $request->remember);

        if($authOK){

             // QUANDO LOGADO SERÁ REDIRECIONADO POR AQUI !!
            return redirect()->intended(view('homeAdmin'));

        }


        else {

              return redirect()->back()->withInputs($request->only('email','remember'));

        }

    }

    public function index()
    {
        return view("admin.admin-login");
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
