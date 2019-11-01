<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updatecomentValidationFormRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
         return [
             'titulo' => 'min:0|max:191',
             'comentario' => 'min:-1|max:191',
             
        ];
     
         $mensagens = [

            'titulo' => 'O campo "titulo" só pode aceitar no máximo 191 caracteres',
            'titulo.min' => 'O campo "titulo" não pode ser nulo',
            'titulo.max' => 'O campo "titulo" aceita no máximo 191 caracteres',

            'comentario.max' => 'O campo "comentario" só pode aceitar no máximo 191 caracteres',
            'comentario.min' => 'O campo "comentario" não pode ser nulo',


        ];

    }
}
