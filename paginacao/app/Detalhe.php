<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalhe extends Model
{
   
    public $table = 'tbl_comentario';

    //   use Notifiable;

    /**
     * The attributes that are mass assignable.
     *s
     * @var array
     */
    protected $fillable = [
        
        'titulo', 'comentario', 'users_id', 'clientes_id','anuncios_id'
        
    ];

    

}
