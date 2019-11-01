<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\NovoContato;


class ContatoController extends Controller
{
    public function index()
    {
        return view ('forms.contato');
    }

    public  function enviaEmail (Request $request)
    {
//        $validacao = $request->validade([
//            'nome' => 'required',
//            'email' => 'required|email',
//            'mensagem' => 'required',
//        ]);

        // Implementar método aqui

       
        /*dados preenchidos pelo interessado*/
        $nome = $request->nome;
        $email = $request->email;
        $mensagem = $request->mensagem;
         $telefone = $request->telefone;
        /**/


         // sobre o anuncio o qual o cliente teve interesse
         $tituloAnuncio = $request->tituloAnuncio;
         $categoriaAnuncio = $request->categoriaAnuncio;
        
        // -------------------


         //informações de quem é dono do anuncio
        $nameAnunciante = $request->nameAnunciante;
        $emailDestinatario = $request->emailDestinatario;



        // Enviando o e-mail
        Mail::to($emailDestinatario)
                    ->send(new NovoContato($nome, $email, $mensagem, $tituloAnuncio, $categoriaAnuncio, $nameAnunciante, $telefone));


        $request->session()->flash('alert-success', 'Sua mensagem foi enviada, obrigado!');
                                return redirect()
                                ->route('cliente.dashboard');
                                
        

    }
}
