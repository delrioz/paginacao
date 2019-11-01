<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sugestoes extends Model
{
    public $table = 'sugestoes';
  
    //   use Notifiable;

    /**
     * The attributes that are mass assignable.
     *s
     * @var array
     */
    protected $fillable = [
        
        'categoria', 'motivo', 'id_dequemcomenta'
        
    ];

    

}
