<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    public $table = 'users';

    
    protected $fillable = [
        
        'name', 'email','password','telefone','idade','sexo','cep','cpf','cnpj',
        'MEI', 'endereco','complemento','aboutMe','exp', 'image', 'diplomaCertificado'
    ];



    protected $hidden = [
        'password', 'remember_token',
    ];




    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
