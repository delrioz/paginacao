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

  <!-- google analytics  -->
  <!-- Global site tag (gtag.js) - Google Analytics -->
  
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-145372974-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-145372974-1');
</script>



</head>

<style scoped>
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
          <a href="/portifolio/{{$id}}" class="list-group-item">Portifólio do Profissional</a>
          <a href="/contatos/{{$id}}" class="list-group-item active" id="ativos">Contatos</a>
        </div>
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div class="card mt-4">
          <div class="card-header" id="avaliacoes"  style="text-align:center;">
         <strong><h4> Contatos do Anunciante:</h4></strong>
          </div>
          <!-- <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt=""> -->
          <div class="card-body">
            <!-- <h3 class="card-title">Contato do Anunciante: Serviço anunciado</h3> -->
            <!-- <h4>$24.99</h4> -->
            <p>Email:<strong> {{ $email }}</strong></p>
            <p>Telefone:<strong> {{ $telefone }}</strong></p>

          <!--   <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dicta fugit fugiat hic aliquam itaque facere, soluta. Totam id dolores, sint aperiam sequi pariatur praesentium animi perspiciatis molestias iure, ducimus!</p> -->
          </div>
        </div>
         <!-- Modal -->
          <div
            class="modal fade"
            id="exampleModal"
            tabindex="-1"
            role="dialog"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
          >
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5
                    class="modal-title"
                    id="exampleModalLabel"
                  >Entrando em contato com o anunciante</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="contact-form">
                        <div class="form-group">
                          <label class="control-label col-sm-2" for="fname">Nome:</label>
                          <div class="col-sm-12">
                            <input
                              type="text"
                              class="form-control"
                              id="fname"
                              placeholder="Digite seu nome"
                              name="fname"
                            />
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6" for="lname">Sobrenome:</label>
                          <div class="col-sm-12">
                            <input
                              type="text"
                              class="form-control"
                              id="lname"
                              placeholder="Digite seu Sobrenome"
                              name="lname"
                            />
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-2" for="email">Email:</label>
                          <div class="col-sm-12">
                            <input
                              type="email"
                              class="form-control"
                              id="email"
                              placeholder="Digitar email"
                              name="email"
                            />
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6" for="comment">Sua mensagem:</label>
                          <div class="col-sm-12">
                            <textarea class="form-control" rows="5" id="comment"></textarea>
                          </div>
                          <br />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                  <button type="button" class="btn btn-warning">Enviar Mensagem</button>
                </div>
              </div>
            </div>
          </div>
        <!-- /.card -->

          <div class="card card-outline-secondary my-4"  style="text-align:center;">
            <div class="card-header" id="avaliacoes">
            <strong><h4>Envie uma mensagem ao anunciante !</h4></strong></div>
            <div class="card-body">
              <h5 style=>Gostou? Então entre em contato com quem anunciou</h5>
              <br />
              <button
                type="button"
                class="btn btn-warning"
                
                id="botaoModal"
              >
                Somente clientes podem entrar em contato</button>
              <hr />
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col-lg-9 -->
      </div>
    </div>
    <!-- /.container -->




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
