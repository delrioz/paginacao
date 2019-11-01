<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="css/app.css">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">



  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>
<style>


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
          <?php

            $idPagina =  $anuncios->id ;

            $id= $idPagina
          ?>
      <div class="col-lg-3">
        <h1 class="my-4">Painel de informações</h1>
        <div class="list-group">
          <a href="/anuncios/{{$id}}" class="list-group-item active" id="ativos">Sobre o anúncio</a>
          <a href="/portifolio/{{$id}}"class="list-group-item">Portifólio do Profissional</a>
          <a href="/contatos/{{$id}}" class="list-group-item">Contatos</a>
        </div>
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">



        <div class="card mt-4">
          @if($anuncios->image !=null)

          <img class="card-img-top img-fluid"
             style="width:825px;  height:450px;"
           src="/storage/{{$anuncios->image}}"
           alt="{{ $anuncios->image}}" >
                @endif

          @if($anuncios->image ==null)

              <div class="alert alert-warning" role="alert">
              Este anuncio não possui foto.
              </div>

                @endif

          <div class="card-body"><br>
           <strong> <h2 class="card-title"
            >{{ $anuncios->titulo }}</strong></h2><br>
            <!-- <h4>$24.99</h4> -->
            <p>Categoria:<strong> {{ $anuncios->categoria }}</strong></p>
            <p>Sobre: <strong>{{ $anuncios->sobre }}</strong></p>
            <p>Possui Mei: <strong>{{ $anuncios->mei }}</strong></p>
            <p>Data anuncio: <strong>{{ $anuncios->created_at }}</strong></p><br>
            <hr style="background-color:purple;">
            <h4 class="card-title"><strong>Localização:</strong></h4>
            <p>Município: <strong>{{ $anuncios->municipio }}</strong></p>
            <p>UF: <strong>{{ $anuncios->UF }}</strong></p>
            <p>CEP: <strong>{{ $anuncios->cep }}</strong></p>

          <!--   <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dicta fugit fugiat hic aliquam itaque facere, soluta. Totam id dolores, sint aperiam sequi pariatur praesentium animi perspiciatis molestias iure, ducimus!</p> -->

          </div>
        </div>
        <!-- /.card -->

        <div class="card card-outline-secondary my-4">
          <div class="card-header" id="avaliacoes"  style="text-align:center;">
           <h5><strong style = "text-align:center; color:black;" > Veja quem avaliou </strong></h5>
          </div>
          <div class="card-body">
  @foreach($mservicos as $mservico)

              <p>{{ $mservico->titulo }}</p>
              <p>{{ $mservico->comentario }}</p>

              <small  style="color:black;">Avaliado por: {{ $mservico->name }}</a></small>
              <hr>

  @endforeach


            <hr>
            <!-- <a id="btnRoxo" href="#" id="exampleModalLabel" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat" >
            Deixe sua Avaliação</a> -->
              <div class="alert alert-warning">
                <p>Somente clientes podem avaliar</p>
              </div>
          </div>

        </div>
        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->

    </div>

  </div>
  <!-- /.container -->

 <!-- modal sobre sugestão -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"  >Deixe seu feedback</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/anuncios/avaliar" method="POST">
         @csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label"
            id="tituloavaliacao"
            name="tituloavaliacao" >Título da Avaliação</label>
            <input type="text" class="form-control" id="tituloavaliacao"
            name="titulo" >
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label"
            name="comentario" id="comentario">Avaliação</label>
            <textarea class="form-control" name="comentario" id="avaliacao"></textarea>
          </div>

              <input type="hidden" name="users_id" value="{{ $anuncios->users_id }}" />


              <input type="hidden" id="clientes_id" name="clientes_id" value="{{ Auth::user()->id  }}" />


              <input type="hidden" name="anuncios_id" value="{{$id}}" />




      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-danger" id="buttonsair" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary" id="buttonenv">Avaliar</button>
      </div>
    </form>
    </div>
  </div>
</div>



  <!-- Modal botão Logar  -->
  <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div><br>
<!--         <h7> você não está logado..</h7>
 -->        <h3 style="text-align: center;">Deseja logar-se como...</h3>
        <div class="modal-body">
          <form action="../telaLogandoUser.php" method="POST">
            <div class="field">
              <button type="submit" class="btn btn-success btn-lg btn-block btn-fullwidth btn-a"
                style="background-color:orange!important;" href=""
                id="btnLogin" >Cliente</button>
            </div>
          </form>
          P
          <!-- <form action="TelaCadastroPrestador/index.html" method="POST"> -->
          <form action="../telaLogandoAnun.php" method="POST">


            <br><br>

          <button type="submit" class="btn btn-success btn-lg btn-block btn-fullwidth btn-a"
                style="background-color:green!important;" href=""
                id="btnLogin" >Anunciante</button>
          </form>





        </div>
        <div class=" modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal"
            style="background-color:rgb(231, 81, 81)!important;"">Fechar</button>
          <!-- <button type=" button class="btn btn-primary id="btnLogin">Salvar mudanças</button>-->
        </div>
      </div>
    </div>
  </div>
  </div>


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
