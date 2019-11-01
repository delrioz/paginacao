


@extends('site.layouts.app')

@section('title', 'Meu Perfil')
@section('content')


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


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="estilo.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!------ Include the above in your HEAD tag ---------->

      @extends('layouts.navbarclientespainel')



<br>
<br>
<br>


    <style>
        .form-control {
            border: none;
            /*Retira as bordas do input*/
            border-bottom: solid 1px #ffffff;
            /*Coloca borda somente na parte de baixo*/
            border-bottom: 1px solid orange;
            /* coloca a borda em baixo */
        }


        #lastName {
            border: orange;
            float: left;
        }

        footer {
            margin-top: 100px;
            color: black;
            background: orange;

        }

        a {
            color: black;
        }

        .list-group-item {
            background-color: orange;
        }

        #ativos {
            background-color: purple;
        }

        .card-header {

            background-color: rgb(249, 249, 249);
        }

        .btn {
            background: rgb(87, 13, 119);
            color: #fff;
            border-color: purple;
        }

        .btn:hover {
            background: white;
            color: purple;
        }

        a {
            color: black;
        }

        #avaliacoes {

            background-color: #FFA500;
        }


    #btn-search {
    background: rgb(87, 13, 119);
    color: #fff;
    border-color: purple;
}
  
  footer {
    margin-top: 100px;
    background-color: #844b96;
    color: white;
}

a {
    color: black;
}




.card-title{
  text-align: center;
}


  
 #btnRoxo{
    background: rgb(87, 13, 119);
    color: #fff;
    border-color: purple;
}

#cleanButton{

    background:rgb(201, 17, 4);
}

#logoConex{
  color: #6c1380;
  font-style: 10px;
}


    </style>

@if($errors->any())
     @foreach($errors->all() as $error)     
        <div class="alert alert-danger">
     
      {{ $error }} 
        </div>

      @endforeach 

 @elseif(session()->has('success'))
         <div class="alert alert-success">

       {{ session('success') }}
 @endif
        </div>

        
<br>



<style>
body {
    background-color: #e9ebee;
}

.card {
    margin-top: 1em;
}

/* IMG displaying */
.person-card {
    margin-top: 5em;
    padding-top: 5em;
}
.person-card .card-title{
    text-align: center;
}
.person-card .person-img{
    width: 10em;
    position: absolute;
    top: -5em;
    left: 50%;
    margin-left: -5em;
    border-radius: 100%;
    overflow: hidden;
    background-color: white;
}


  footer {
    margin-top: 100px;
    background-color: #844b96;
    color: white;
}

a {
    color: black;
}




.card-title{
  text-align: center;
}

body {
    background-color: #F9F9F9;
  }
  
 #btnRoxo{
    background: rgb(87, 13, 119);
    color: #fff;
    border-color: purple;
}

#logoConex{
  color: #6c1380;
  font-style: 10px;
}











</style>

<!--
    Realised by Thibault Leveau
    https://www.linkedin.com/in/thibault-leveau-a76923ba/
-->
<div class="container" style="margin-top: 1em;">
    <!-- Sign up form -->
<form action = "{{ route('Clienteprofile.update') }}" method="POST" enctype="multipart/form-data">
   {!! csrf_field() !!}        <!-- Sign up card -->
        <div class="card person-card">
            <div class="card-body">
                <!-- Sex image -->
                <img id="img_sex" class="person-img"
                    src="{{ url('storage/users/'.auth()->guard('cliente')-> user()->image) }}"
                   alt="{{ auth()->guard('cliente')-> user()->image }}"  style= "max-width: 170px;">
                    <label for="exampleFormControlFile1">Selecione uma imagem</label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1"
                    name="image" value="{{ auth() ->guard('cliente')-> user()->image }}"
                    >
                <h2 id="who_message" class="card-title">Seus Dados Cadastrados:</h2><br>
                <!-- First row (on medium screen) -->
                <div class="row">
                    <div class="form-group col-md-2">
                            
                    </div>
                    <div class="form-group col-md-8">
                 
                          <input id="text" type="text" class="form-control" placeholder="name"
                         name="name"  readonly="readonly"
                            value="{{ auth() ->guard('cliente')-> user()->name }}" >
                        <div id="name" class="invalid-feedback">
                            
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6" style="padding=0.5em;">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Dados de contato e Cadastro:</h2>
                        <div class="form-group">
                            <label for="email" class="col-form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                            value="{{ auth() ->guard('cliente')-> user()->email }}"
                             placeholder="example@gmail.com" required>
                            <div class="email-feedback">
                            
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tel" class="col-form-label">Telefone</label>
                            <input type="text" class="form-control" id="telefone" name="telefone"
                             value="{{ auth() ->guard('cliente')-> user()->telefone }}"
                             placeholder="+55 31 9777-77 " >
                            <div class="phone-feedback">
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
            <div class="col-md-6">
                <div class="card"> 
                    <div class="card-body">
                        <h2 class="card-title">Segurança da sua conta</h2>
                        <div class="form-group">
                            <label for="password" class="col-form-label">Senha</label>
                            <input type="password" class="form-control" id="password"  name="password"
                            placeholder="Digite Sua senha" >
                            <div class="password-feedback">
                            
                            </div>
                        </div>

                       


                        <div class="form-group">
                            <label for="password-confirm" class="col-form-label">Confirmar Senha</label>
                            <input type="password" class="form-control" id="password-confirm" 
                            name="password_confirmation"  autocomplete="new-password"
                            placeholder = "confirmar nova senha" >
                            <div class="password-confirm-feedback">
                            
                            </div>
                        </div>
                    </div>
                </div>
                  </div>
              </div>
              <div style="margin-top: 1em;">
                  <button type="submit" class="btn btn-warning btn-lg btn-block"
                  id="btnRoxo">Atualizar!</button>
              </div>
              </form>
      </div>