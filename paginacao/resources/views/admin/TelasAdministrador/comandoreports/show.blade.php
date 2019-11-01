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



  <form  method="POST" enctype="multipart/form-data">
   {!! csrf_field() !!}


   <div class="form-group">
     <label for="exampleFormControlInput1">Quem Reportou :</label>
     <input type="text" class="form-control" id="exampleFormControlInput1"
      name="name" value="{{ $reports->emailDeQmAnuncia }}" readonly="true">
   </div>



  <div class="form-group">
    <label for="exampleFormControlInput1">Categoria:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1"
     name="name" value="{{ $reports->title }}" required readonly="true">
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Sobre a Categoria:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
    name="sobre" value="{{ $reports->moreAbout }}"  required readonly="true">
    {{ $reports->moreAbout }}</textarea>
  </div>

  <a href="/admin/reports" class="btn btn-danger">Voltar</a>

<!-- 
  <a type="button" class="btn btn-danger"  href="/admin/reports" id="1"
      style="background-color:purple; cplor:grey;"
  >Voltar -->
  </div>



</form>
