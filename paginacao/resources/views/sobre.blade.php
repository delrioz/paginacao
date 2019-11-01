


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/app.css">
  <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="estilo.css">


  <link href="{{ asset('css/estilobotoes.css') }}" rel="stylesheet">



<style media="screen">

  #conteudo{
    color: #000000;
    font-size:  23px;
    font-style: normal;
  }

  #jumbotron {

    background-color: #ffaa00;

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

li{
      style="font-style:Tahoma"; 
      font-size:18px;

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

a

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

<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: #FFA500">

<a href="/"  style="font-size:20px;" color= "purple";><img src="{{ asset('findeela/Findeela BandW.png') }}"
     alt="Findeela.png" style="width:36px;height:50px;">Findeela</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>


        <li class="nav-item active">
          <a class="nav-link"  href="/sobre"
          >Sobre Nós</a>
        </li>

        <!-- <li class="nav-item active">
          <a class="nav-link" href="../restrito">Área Restrita</a>
        </li> -->






        <li class="nav-item active">
          <a class="nav-link"
          data-toggle="modal" data-target="#modalLogin">Logar</a>
        </li>




      </ul>
        <form  method="POST" action= "/clienteAnuncios/search" class="form-inline my-2 my-lg-0">
      @csrf

        <button class="btn btn-outline-warning my-2 my-sm-0"
        class="btn btn-warning" id="btnRoxo" type="button"
        data-toggle="modal" data-target="#modalLogin"

         type="button" id="btnRoxo">Navegar</button>
      </form>
    </div>
  </nav>


      <br>
      <br>
<br>





<div class="container">
  <header class="jumbotron my-4" id="jumbotron">

  <h3 style="text-align:center; font-size:45px; color: #6c1380; ">Sobre Nós!</h1>
  <p id="conteudo">A Findeela é uma startup situada em Belo Horizonte / MG  que veio com o objetivo de ajudar
   prestadores de serviços autônomos, a se conectarem com seus potênciais clientes.<p>
    <p id="conteudo">E não só apenas realizar esta conexão GRATUITA, mas, também
    garantir segurança tanto pra quem anuncia quanto pra quem contrata.</p>

 <p id="conteudo">Deste modo, elaboramos uma maneira para que os prestadores de serviços criem seus próprios portifólios de maneira
 gratuita, anexando imagem de perfil, certificados que tenha e etc.</p><p id="conteudo">E o cliente/usuário neste caso irá ter também sua foto de
perfil com uma foto pessoal, podendo escolher pelo qual profissional preferir.</p>
  <hr class="my-4">
  <a class="btn btn-warning btn-lg" href="#"
    data-toggle="modal" data-target="#modalLogin"
    role="button">Navegar</a>
</header>

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
          <form action="/cliente" >
            <div class="field">
              <button type="submit" class="btn btn-success btn-lg btn-block btn-fullwidth btn-a"
                style="background-color:orange!important;" href=""
                id="btnLogin" >Usuário</button>
            </div>
          </form>

            <br><br>
          <!-- <form action="TelaCadastroPrestador/index.html" method="POST"> -->
          <form action="/anuncios" >

          <button type="submit" class="btn btn-success btn-lg btn-block btn-fullwidth btn-a"
                id="btnRoxo" href="/anuncios"
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