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


    <!-- enctype="multipart/form-data" é para permitir o envio de arquivos como imagens, pdf's e etc  -->
  <form action = "{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
   {!! csrf_field() !!}

  <div class="form-group">
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" class="form-control"  id="name" aria-describedby="emailHelp" placeholder="Seu email"
    name="name"
    value="{{ auth()->user()->name }}">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Endereço de email</label>
    <input type="email" class="form-control" id="exampleInputEmail1"
     name="email"
     aria-describedby="emailHelp" 
    value="{{ auth()->user()->email }}">
    <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha"
     name="password">
  </div>


  <div class="form-group">
    <label for="idade">idade</label>
    <input type="idade" class="form-control" id="idade" placeholder="idade"
     value="{{ auth()->user()->idade }}"  name="idade">
  </div>




  <div class="form-group">
    <label for="exampleInputPassword1">sexo</label>
    <input type="sexo" class="form-control" id="sexo" placeholder="sexo"
     value="{{ auth()->user()->sexo }}" name="sexo">
  </div>



  <div class="form-group">
    <label for="exampleInputPassword1">cep</label>
    <input type="cep" class="form-control" id="cep" placeholder="cep"
     value="{{ auth()->user()->cep }}" name="cep">
  </div>


 <div class="form-group">
    <label for="exampleInputPassword1">cpf</label>
    <input type="cpf" class="form-control" id="cpf" placeholder="cpf"
     value="{{ auth()->user()->cpf }}" name="cpf">
  </div>


 <div class="form-group">
    <label for="exampleInputPassword1">cnpj</label>
    <input type="cnpj" class="form-control" id="cnpj" placeholder="cnpj"
     value="{{ auth()->user()->cnpj }}" name="cnpj">
  </div>

 <div class="form-group">
    <label for="MEI">MEI</label>
    <input type="MEI" class="form-control" id="MEI" placeholder="MEI"
     value="{{ auth()->user()->MEI }}" name="MEI">
  </div>

<div class="form-group">
    <label for="endereco">endereco</label>
    <input type="endereco" class="form-control" id="endereco" placeholder="endereco"
     value="{{ auth()->user()->endereco }}" name="endereco">
  </div>

  <div class="form-group">
    <label for="complemento">complemento</label>
    <input type="complemento" class="form-control" id="complemento" placeholder="complemento"
     value="{{ auth()->user()->complemento }}" name="complemento">
  </div>

  <div class="form-group">
    <label for="aboutMe">aboutMe</label>
    <input type="aboutMe" class="form-control" id="aboutMe" placeholder="aboutMe"
     value="{{ auth()->user()->aboutMe }}" name="aboutMe">
  </div>

  <div class="form-group">
    <label for="exp">exp</label>
    <input type="exp" class="form-control" id="exp" placeholder="exp"
     value="{{ auth()->user()->exp }}" name="exp">
  </div>

    <div class="form-group">
    <label for="diplomaCertificado">diplomaCertificado</label>
    <input type="diplomaCertificado" class="form-control" id="diplomaCertificado" placeholder="diplomaCertificado"
     value="{{ auth()->user()->diplomaCertificado }}" name="diplomaCertificado">
  </div>



  <div class="form-group">
     @if(auth()->user()->image !=null)
            <img src="{{ url('storage/users/'.auth()->user()->image) }}"
             alt="{{ auth()->user()->name }}" style= "max-width: 170px;">
     @endif

    <label for="exampleFormControlFile1">Exemplo de input de arquivo</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1"
      name="image">
  </div>


  <button type="submit" class="btn btn-warning">Enviar</button>
</form>

@endsection