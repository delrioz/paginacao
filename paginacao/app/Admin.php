<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable

{
    // use HasApiTokens;
    use Notifiable;
    
    // protected $table = 'cadastrousuario';
    protected $guard = 'admin';

    // protected $primaryKey = 'id';  modificamos o nome aqui quando nossa PK nao chama "Id"

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','password_confirmation'
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
