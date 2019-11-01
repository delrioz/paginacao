<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/app.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
  @extends('layouts.navbarclientespainel')


<br>
<br>
<br>
<br>
<div class="container">
<div class="card border">
 <div class="card-body">
 <?php
    $idpag =  $mservicos->id ;

 ?>
  <form action="/Comentariosupdate/{{$mservicos->id}}"  method="POST" enctype="multipart/form-data">
   {!! csrf_field() !!}

  <div class="form-group">
    <label for="exampleFormControlInput1">Título da Avaliação</label>
    <input type="text" class="form-control" id="exampleFormControlInput1"
     name="titulo" value="{{ $mservicos->titulo }}" required>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Avaliação</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
    name="comentario" value="{{ $mservicos->comentario }}"  required>
    {{ $mservicos->comentario }}</textarea>
  </div>

  <button type="submit" class="btn btn-primary" id="1">Salvar</button>
  <button type="reset" class="btn btn-danger" id="cleanButton" >Limpar</button>
  </div>

</form>
