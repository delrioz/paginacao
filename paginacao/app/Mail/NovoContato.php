<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NovoContato extends Mailable
{
    use Queueable, SerializesModels;

    /*declarando atributos de acordo com os campos em questão*/

    public $nome;
    public $email;
    public $mensagem;
    public $tituloAnuncio ;
    public $categoriaAnuncio ;
    public $nameAnunciante ;
    public $telefone ;


    public function __construct($nome, $email, $mensagem, $tituloAnuncio, $categoriaAnuncio, $nameAnunciante, $telefone ) //oq eles recebem do formulario e do controller
    {

        //quando mandamos coisas do controller para ca, ele traz pro construtor para a gente poder usar
        // os dados aqui e declaramos os atributos em cima do construct e no construct entre () recebemos os
        //parametros do controller
         // e  dentro o construct ou seja **aqui ** atualizamos os valores das variáveis
        //que vamos por la em cima

        $this->nome  = $nome;
        $this->email = $email;
        $this->mensagem = $mensagem;
        $this->tituloAnuncio  = $tituloAnuncio ;
        $this->categoriaAnuncio  = $categoriaAnuncio ;
        $this->nameAnunciante  = $nameAnunciante ;
        $this->telefone  = $telefone ;


    }



    public function build()
    {

        // e no método  BUILD é onde ele faz realmente o envio do e-mail, onde colocaremos vários parâmetros aqui

        return $this->from('giovani@gmail.com.br')
                    ->subject('Findeela - Você tem um novo interessado')
                    ->view('emails.contato');
    }


}
