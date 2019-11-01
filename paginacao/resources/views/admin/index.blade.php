@extends('layouts.app')

 bem vindo, ADM!

{{ auth() ->guard('admin')-> user()->name }}



@extends('site.layouts.app')

@section('title', 'Meu Perfil')
@section('content')

<h1>Meu Perfil</h1>

@if(session('success'))

   <div class="alert alert-success">
   {{ session('success' )}}
   </div>

@endif


@if(session('error'))

   <div class="alert alert-danger">
   {{ session('error' )}}
   </div>

@endif
@extends('layouts.app')

    
    <H1>ADM Dashboard</H1>

  <form action = "{{ route('profile.update') }}" method="POST">
   {!! csrf_field() !!}

  <div class="form-group">
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" class="form-control"  id="name" aria-describedby="emailHelp" placeholder="Seu email"
    name="name"
    value="{{auth() ->guard('admin')-> user()->name }}">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Endereço de email</label>
    <input type="email" class="form-control" id="exampleInputEmail1"
     name="email"
     aria-describedby="emailHelp" 
    value="{{auth() ->guard('admin')-> user()->name }}">
    <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha"
     name="password">
  </div>






  <div class="form-group">
    <label for="exampleFormControlFile1">Exemplo de input de arquivo</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1"
      name="image" >
  </div>


  <button type="submit" class="btn btn-warning">Enviar</button>
</form>
