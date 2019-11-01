<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{   


    public function categoria(){

        return $this->belongsTo(Categoria::class);
    }
   
    public $table = 'anuncios';

    //   use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
        'titulo', 'categoria', 'endereco', 'complemento', 'municipio','cep','UF','bairro','sobre',
        'image','mei', 'users_id','password',
        
    ];

    

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
