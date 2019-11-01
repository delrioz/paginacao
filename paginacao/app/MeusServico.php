<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MeusServico extends Model
{
     /*campos permitidos a serem inseridos no banco de dados*/
    protected $fillable = [ 
        'tituloavaliacao', 'avaliacao'
    ];
}
