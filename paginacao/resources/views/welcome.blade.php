<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="css/app.css">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="./estilo.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <link href="{{ asset('css/estilowelcome.css') }}" rel="stylesheet">



  <title>Findeela</title>
  <br>
  <br>
  <br>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/small-business.css" rel="stylesheet">

<style>


 #btnRoxo{
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


#MEI{
  color: blue;
}



p{
  color:black;
  font-family:Arial;

}

h5{
  color: purple;
  font-size 22px;
}


li{
      style="font-style:Tahoma"; 
      font-size:20px;

}


</style>
</head>

<body>


<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: #FFA500">
  <!-- <link href="{{ asset('findeela/Findeela BandW.png') }}" rel="stylesheet"> -->

  <a href="/"><img src="{{ asset('findeela/Findeela BandW.png') }}"
   alt="Findeela.png" style="width:36px;height:50px;"></a>
  <a style="color:black;" href="/">Findeela</a>
  <a href="">   </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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







  <!-- Page Content -->
  <div class="container">

    <!-- Heading Row -->
    <div class="row align-items-center my-5">
      <div class="col-lg-7">

        <img class="img-fluid rounded mb-4 mb-lg-0"
         src="https://images.pexels.com/photos/2089368/pexels-photo-2089368.jpeg?cs=srgb&dl=beautiful-computer-desk-2089368.jpg&fm=jpg" >
        </div>


      <!-- /.col-lg-8 -->
      <div class="col-lg-5">
        <h2 class="font-weight-light">Qual é o propóstio da </h2> <h2><strong>Findeela?</strong></h2>
        <p>Nós somos uma empresa que tem como objetivo conectar prestadores de serviços à potênciais clientes
        de maneira gratuita !!</p>
        <a class="btn btn-warning" id="btnRoxo" type="button"
        data-toggle="modal" data-target="#modalLogin"
        >Quero Navegar</a>
      </div>
      <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->

    <!-- Call to Action Well -->
    <div class="card text-white bg-warning my-5 md-4text-center" id="card-info" style="text-align:center;">
      <div class="card-body" id="btnRoxo">
        <p class="text-white m-0" style="color:black; "  id="btnRoxo">
        <h4>Como funciona a Findeela, passo a passo</h4> </p>
      </div>
    </div>

    <!-- Content Row -->
    <div class="row" >
      <div class="col-md-4 mb-5">
        <div class="card h-100" style="" id="cardanunciantes" >
          <div class="card-body" >
            <h2 class="card-title">Anunciantes</h2>
            <p class="card-text">Anunciantes se cadastram gratuitamente na plataforma,
            criando um portifólio profissional. </p>
            <p>O mesmo pode cadastrar um anúncio divulgando seu serviço quando quiser.
             Damos suporte à profissonais <a href="https://meibrasil.com/finalizar-compra/?layout=cadastre-agora-seu-cnpj-mei&amp;amp;add-to-cart=43&gclid=CjwKCAjw1f_pBRAEEiwApp0JKP2THMbIsT45j90nF_JK6PEz3HHTiCHvtgwuixv9N5-dHDAp1tXWmBoCu6gQAvD_BwE" id="MEI">MEI</a></p>
          </div>
          <div class="card-footer"
    style="position:absolute !important; bottom:0 !important; width:100% !important; background-color: transparent !important;text-align: center !important;">
    <a href="/painelvendedor" class="btn btn-warning" id="btnRoxo">Logar como Anunciante</a>
  </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Usuários</h2>
            <p class="card-text">Usuários se cadastram gratuitamente na plataforma e podem navegar como quiserem pesquisando o serviço ao qual necessitam.</p><p> Poderão ter acesso aos portifólios de quem oferece determinados serviços e optar pelo que profissional preferir.</p>
          </div>
          <div class="card-footer"
    style="position:absolute !important; bottom:0 !important; width:100% !important; background-color: transparent !important;text-align: center !important;">
    <a href="/cliente" class="btn btn-warning" id="btnRoxo">Logar como Usuário</a>
  </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Findeela</h2>
            <p class="card-text">Nós faremos com que prestadores de serviços possam divulgar seus serviços de maneira gratuita conectando-os a clientes em potêncial. De maneira com que tanto o cliente quanto o anunciante possam ter a segurança sobre com quem estão fechando negócio </p>
          </div><br>
          <br>
          <br>

          <div class="card-footer"
    style="position:absolute !important; bottom:0 !important; width:100% !important; background-color: transparent !important;text-align: center !important;">
    <a href="/admin" class="btn btn-warning" id="btnRoxo">Navegar</a>
  </div>
        </div>
      </div>
      <!-- /.col-md-4 -->

    </div>
    <!-- /.row -->

  <!-- /.container -->

  <div class="card text-white bg-warning my-5 md-4text-center" id="card-info" style="text-align:center;">
    <div class="card-body" id="btnRoxo">
      <p class="text-white m-0" style="color:black; "  id="btnRoxo">
      <h4>Veja as categorias ja cadastradas</h4> </p>
    </div>
  </div>
      <div class="input-group md-form form-sm form-1 pl-0">

<!-- <div class="input-group-prepend">
  <span class="input-group-text cyan lighten-2" id="basic-text1"><i class="fas fa-search text-white"
      aria-hidden="true"></i></span>
</div> -->

<!--
<button type="button" class="btn btn-warning" id="btnRoxo"
data-toggle="modal" data-target="#modalLogin">Sugerir
Nova Categoria</button> -->
<div class="row" href="">
    <div class="card-deck"  style="margin:20px;">
        <div class="card" >
        <img src="{{asset('findeela/educacional.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Educacional</h5>
                <p class="card-text">Professores particulares, professores de enem, professores de linguas estrangeiras, professores de história, geografia, matemática...</p>
                   </div><br><br><br>
  <div class="card-footer"
    style="position:absolute !important; bottom:0 !important; width:100% !important; background-color: transparent !important;text-align: center !important;">
    <a data-toggle="modal" data-target="#modalLogin" class="btn btn-warning" id="btnRoxo">Mais Detalhes</a>
  </div>
        </div>

        <div class="card" id="card-cat">
            <img src="{{asset('findeela/limpeza.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Serviços Gerais e Limpezas</h5>
                <p class="card-text">Encanadores, profissonais da rede elétrica, desentupidores, domésticas...</p>
                </div><br><br><br>
   <div class="card-footer"
    style="position:absolute !important; bottom:0 !important; width:100% !important; background-color: transparent !important;text-align: center !important;">
    <a data-toggle="modal" data-target="#modalLogin" class="btn btn-warning" id="btnRoxo">Mais Detalhes</a>
  </div>
        </div>

        <div class="card" id="card-cat">
          <img src="{{asset('findeela/transp.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Serviços de Transportes</h5>
                <p class="card-text">Motoristas particulares, vans, excursões, carretos, taxis, mototaxis..</p>
                 </div><br><br><br>
  <div class="card-footer"
    style="position:absolute !important; bottom:0 !important; width:100% !important; background-color: transparent !important;text-align: center !important;">
    <a data-toggle="modal" data-target="#modalLogin" class="btn btn-warning" id="btnRoxo">Mais Detalhes</a>
  </div>
        </div>

    </div>
</div>

<div class="row">
    <div class="card-deck" style="margin:20px;">
        <div class="card" id="card-cat">
        <img src="{{asset('findeela/freela.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Serviços de freelancer</h5>
                <p class="card-text">Programadores, desenvolvedores, designers, fotógrafos....</p>
                 </div><br><br><br>
   <div class="card-footer"
    style="position:absolute !important; bottom:0 !important; width:100% !important; background-color: transparent !important;text-align: center !important;">
    <a data-toggle="modal" data-target="#modalLogin" class="btn btn-warning" id="btnRoxo">Mais Detalhes</a>
  </div>
        </div>

        <div class="card" id="card-cat">
        <img src="{{asset('findeela/profsaude.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Profissonais da Saúde</h5>
                <p class="card-text">Personal's trainers, nutricionistas, pessoas do ramo dos suplementos legais, professores particulares de musculação e acadêmia.</p>
               </div><br><br><br>

<div class="card-footer"
  style="position:absolute  !important; bottom:0 !important; width:100% !important; background-color: transparent !important;text-align: center !important;">
  <a data-toggle="modal" data-target="#modalLogin" class="btn btn-warning" id="btnRoxo">Mais Detalhes</a>
</div>
        </div>

        <div class="card" id="card-cat">
        <img src="{{asset('findeela/cozinha.jpg')}}" class="card-img-top" alt="...">

            <div class="card-body">
                <h5 class="card-title">Alimentícios e Cozinha</h5>
                <p class="card-text">Cozinheiros particulares, cozinheiros, doceiros....</p>
               </div><br><br><br>
  <div class="card-footer"
    style="position:absolute !important; bottom:0 !important; width:100% !important; background-color: transparent !important;text-align: center !important;">
    <a data-toggle="modal" data-target="#modalLogin" class="btn btn-warning" id="btnRoxo">Mais Detalhes</a>
  </div>
        </div>



    </div>
</div>
<div class="row">
    <div class="card-deck" style="margin:20px;">
        <div class="card" id="card-cat">
        <img src="{{asset('findeela/festivos.jpg')}}" class="card-img-top" alt="...">

            <div class="card-body">
                <h5 class="card-title">Festivos</h5>
                <p class="card-text">Animadores, organizadores de enventos, churrasqueiros para festas, doceiros para festas, arranjo para flores e buquês de casamento e festas...</p>
                </div><br><br><br>
  <div class="card-footer"
    style="position:absolute !important; bottom:0 !important; width:100% !important; background-color: transparent !important;text-align: center !important;">
    <a data-toggle="modal" data-target="#modalLogin" class="btn btn-warning" id="btnRoxo">Mais Detalhes</a>
  </div>
        </div>

        <div class="card" id="card-cat">
        <img src="{{asset('findeela/baba.jpg')}}" class="card-img-top" alt="...">

    <div class="card-body">
        <h5 class="card-title">Babás e Cuidadoras</h5>
        <p class="card-text">Babás, cuidadores de idosos, de cachorros, de animais em geral...</p>
       </div><br><br><br>
  <div class="card-footer"
    style="position:absolute !important; bottom:0 !important; width:100% !important; background-color: transparent !important;text-align: center !important;">
    <a data-toggle="modal" data-target="#modalLogin" class="btn btn-warning" id="btnRoxo">Mais Detalhes</a>
  </div>
        </div>

        <div class="card" id="card-cat">
        <img src="{{asset('findeela/barbeiro.jpg')}}" class="card-img-top" alt="...">

    <div class="card-body">
        <h5 class="card-title">Beleza</h5>
        <p class="card-text">Cabelereiros, maquiadores, manicures, pessoas que trabalham com aluguéis de roupas...</p>
        </div><br><br><br>


    <div class="card-footer"
        style="position:absolute !important; bottom:0 !important; width:100% !important; background-color: transparent !important;text-align: center !important;">
        <a data-toggle="modal" data-target="#modalLogin" class="btn btn-warning" id="btnRoxo">Mais Detalhes</a>
    </div>
        </div>




    </div>
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
          <form action="/cliente" >
            <div class="field">
              <button type="submit" class="btn btn-success btn-lg btn-block btn-fullwidth btn-a"
                style="background-color:orange!important;" href=""
                id="btnLogin" >Usuário</button>
            </div>
          </form>

          <!-- <form action="TelaCadastroPrestador/index.html" method="POST"> -->
          <form action="/anuncios" >


            <br><br>

          <button type="submit" class="btn btn-success btn-lg btn-block btn-fullwidth btn-a"

                id="btnRoxo" >Anunciante</button>
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
