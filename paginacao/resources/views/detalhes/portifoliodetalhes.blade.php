<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Findeela</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-item.css" rel="stylesheet">

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">



  <link rel="stylesheet" href="css/app.css">




</head>
<style>


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

#avaliacoes {
  background-color: #ffa500;
}

.card-title {
  text-align: center;
}

body {
    background-color: #F9F9F9;
  }

#botaoModal {
  float: right 50px;
  text-align: center;
  color: white;
  background-color:purple;
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



  footer {
    margin-top: 100px;
    background-color: #844b96;
    color: white;
}

a {
    color: black;
}

.list-group-item{
  background-color: orange;
}

#ativos{
  background-color: purple;
}

#avaliacoes{

   background-color: #FFA500;
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



footer {
    margin-top: 100px;
    background-color: #844b96;
    color: black!important;
    font-size:15px ;!
    font-style:Arial;
}

a {
    color: black;  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
}



 li{
      style="font-style:Tahoma"; 
      font-size:14px;

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

#liLogado{
  style:none;
}

h5{
  color: purple;
  font-size 22px;
}

</style>

<body>

      @extends('layouts.navbaranunciantes')


  <br>
  <br>
  <br>
  <br>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
        <h1 class="my-4">Painel de informações</h1>
        <div class="list-group">
          <a href="/anuncios/{{$id}}" class="list-group-item" >Sobre o anúncio</a>
          <a href="/portifolio/{{$id}}" class="list-group-item active" id="ativos">Portifólio do Profissional</a>
          <a href="/contatos/{{$id}}" class="list-group-item">Contatos</a>
        </div>
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div class="card mt-4" >
          <!-- <img class="card-img-top img-fluid" src="../.././imgs/fotoperfil.jpg" size="50px"> -->

           <?php



          ?>
          <br><div class="card-title">

          <h3 class="card-title"><strong>Portifólio do Profissional</strong></h3><br>
        </div>



          <div class="card-body">


            <div class="row">
            <div class="col-md-12">
            <div class="col md-3">


            @if($image !=null)
            <img src="{{ url('storage/users/'.$image) }}"
            alt="{{$image}}"  class="img-thumbnail"  style="width: 270px;  height: 260px;"
               align="right"><br>
            @endif



              <!-- <h4>$24.99</h4> <img src="../.././imgs/fotoperfil.jpg" alt="thumbnail"
               class="img-thumbnail" style="width: 200px" align="right"><br> -->
            </div>
            <div class="col">
            <p id="id" name="id">Nome: <strong>{{ $nome}}</strong></p>
          </div>
            <div class="col">
            <p>Idade: <strong>{{ $idade}}</strong></p>
          </div>
          <div class="col">
            <p>Sex:   <strong>{{ $sexo}}</strong></p>
          </div>
          <div class="col">
            <p>cep:   <strong>{{ $cep }}</strong></p>
          </div>
          <div class="col">
            <p>Cnpj:  <strong>{{ $cnpj}}</strong></p>
          </div>
          <div class="col">
            <p>Mei:   <strong>{{ $MEI}}</strong></p>
          </div>
          <div class="col">
            <p>Data do Cadastro: <strong>26/09/19</strong></p>

          <?php

                    $file_name  =   $diplomaCertificado
          ?>


      @if($diplomaCertificado != 'default.png')
          <a type="button" class="btn btn-md btn-warning"
            href="/downloadPDF/{{$file_name}}">Baixar Certificado</a>
      @endif


          </div>

          </div>

        </div>
        <hr style="background-color:purple;">
            <h4 class="card-title"><strong>Localização:</strong></h4>
            <p>Município: <strong>{{ $endereco }}</strong></p>
            <p>UF:        <strong>{{ $cep }}</strong></p>
            <p>CEP:       <strong>31170024</strong></p>

          <!--   <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dicta fugit fugiat hic aliquam itaque facere, soluta. Totam id dolores, sint aperiam sequi pariatur praesentium animi perspiciatis molestias iure, ducimus!</p> -->

          </div>
        </div>
        <!-- /.card -->

        <div class="card card-outline-secondary my-4">
          <div class="card-header" id="avaliacoes"
           style="text-align:center; background-color: #FFA500;"


          h2 ><h4>

          <strong>
          Área sobre mim e experiências:</h4></strong>
          </div>
          <div class="card-body">
            <h3  style="text-align:center;">Experiências:</h3><br>
            <p>{{ $exp }}</p>
            <small class="text-muted" >Experiências de  <a>{{ $nome }}</a> em 24/06/19</small>
            <hr style="background-color:purple;">
            <h3  style="text-align:center;">Sobre Mim:</h3><br>
            <p>{{ $aboutMe }}</p>
            <small class="text-muted">Experiências de <a>{{ $nome }}</a> em 24/06/19</small>
            <hr>
          </div>
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->

    </div>

  </div>
  <!-- /.container -->




  <!-- Footer -->
  <div class='escondeFooter'>
<footer class="page-footer font-larger teal pt-4 navbar-fixed-bottom footer"
 style="display: block; position: relative; width: 100%; clear: both; background-color: #FFA500 !important;color:white">

  <!-- Footer Text -->
  <div class="container-fluid text-center text-md-left" >

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-7 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase font-weight-bold"><img src="{{ asset('findeela/Findeela BandW.png') }}"alt="Findeela.png" style="width:36px;height:50px;"> Findeela</h5>
        <p style="font-style: "Tahoma"; font-size:75px";>
        Somos uma empresa que tem como o propósito conectar profissionais autônomos à possíveis clientes de maneira, rápida e gratuita.
        De modo que ambas as partes tenham a segurança ao fechar ou ao anunciar um serviço. Venha fazer parte e divulgar no #Findeela </p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-6">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-12" ">
        <!-- Content -->
        <h5 class="text-uppercase font-weight-bold">Links Úteis</h5><br>
        <ul>
        <a href=""><li style="font-styl:verdana; font-size:20px;">Facebook</li></a>
        <a href=""><li>Twitter</li></a>
        <a href=""><li>Instagram </li></a>
        <a href=""><li>LinkedIn</li></a>

        </ul>

        <div class="col-md-2 mb-md-0 mb-12" ">

        </div>
        
        </div>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Text -->

  <!-- Copyright -->
 
  <!-- Copyright -->

</footer>
<!-- Footer -->
</div>







  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>
