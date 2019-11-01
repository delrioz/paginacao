
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="estilo.css">
    <link href="{{ asset('css/estilobotoes.css') }}" rel="stylesheet">




    <title>Findeela</title>
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
      font-size:17px;

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



<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">



  <!--NAVBAR-->
<!--NAVBAR-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: #FFA500">



<a href="/cliente"  style="font-size:20px;" color= "purple";><img src="{{ asset('findeela/Findeela BandW.png') }}"
alt="Findeela.png" style="width:36px;height:50px;">Findeela</a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
 <ul class="navbar-nav mr-auto">
   <li class="nav-item active">

     <a class="nav-link" href="/cliente">Home <span class="sr-only">(current)</span></a>
   </li>

   <li class="nav-item active">
     <a class="nav-link" href="/Cpaineladministrador">Painel de Controle</a>
   </li>

   <li class="nav-item active">
     <a class="nav-link" href="/meu-perfilCliente"">Meus Dados</a>
   </li>



   <li class="nav-item active">
     <a class="nav-link" href="/sobre">Sobre Nós</a>
   </li>

   <!-- <li class="nav-item active">
     <a class="nav-link" href="/todosanunciosvend">Todos Anúncios</a>
   </li>

   <li class="nav-item active">
     <a class="nav-link" href="/listarcategorias">Listar Categorias</a>
   </li> -->

   <!-- <li class="nav-item active">
     <a class="nav-link" href="../restrito">Área Restrita</a>
   </li> -->







   <!-- <li class="nav-item dropdown">
       <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
           Logado <span class="caret"></span>
       </a>

       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
           <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
               {{ __('Logout') }}
           </a>



           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               @csrf
           </form>
       </div>
   </li> -->


 </ul>



<form  method="POST" action= "/clienteAnuncios/search" class="form-inline my-2 my-lg-0">
 @csrf
   <input class="form-control mr-sm-2" type="busca" placeholder="Digite o serviço o qual procura"
     aria-label="busca" size="70" name="text">
   <button class="btn btn-outline-warning my-2 my-sm-0" type="submit" id="btnRoxo">Pesquisar</button>
 </form>



<ul class="navbar-nav  ml-4">
   <!-- Authentication Links -->
   @guest
       <li class="nav-item">
           <a class="nav-link" href="{{ route('login') }}"
             style="color:black;"
           >{{ __('Login') }}</a>
       </li>
       @if (Route::has('register'))
           <li class="nav-item">
               <a class="nav-link" href="{{ route('register') }}"
               style="color:black;"
               >{{ __('Registrar-se') }}</a>
           </li>
       @endif
   @else

       <li class="nav-item dropdown">
           <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
               {{ Auth::user()->name }} <span class="caret"></span>
           </a>

           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                   {{ __('Logout') }}
               </a>

               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                   @csrf
               </form>
           </div>
       </li>
   @endguest
</ul>
</div>

</nav>








    <!--POST AREA-->
    <div class="container">
        <div class="row center">
            <div class="col-lg-12">




                <h1>Selecione a categoria desejada</h1>
            </div>
        </div>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
      <div class="alert alert-danger">
         {{ session('error') }}
      </div>
    @endif

              <div class="input-group md-form form-sm form-1 pl-0">

        <!-- <div class="input-group-prepend">
          <span class="input-group-text cyan lighten-2" id="basic-text1"><i class="fas fa-search text-white"
              aria-hidden="true"></i></span>
        </div> -->
       <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">Sugerir
       Nova Categoria</button>
        <div class="row" href="">
            <div class="card-deck">
            <div class="card" id="card-cat">
                <img src="{{asset('findeela/educacional.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <?php
         $nomePS = "Educacional";?>
                        <h5 class="card-title">Educacional</h5>
                        <p class="card-text">Professores particulares, professores de enem, professores de linguas estrangeiras, professores de história, geografia, matemática...</p>
                           </div><br><br><br>
          <div class="card-footer"
            style="position:absolute !important; bottom:0 !important; width:100% !important; background-color: transparent !important;text-align: center !important;">
            <a href="/categoriacli/{{$nomePS}}" class="btn btn-warning">Mais Detalhes</a>
          </div>
                </div>

                <div class="card" id="card-cat">

         <?php
         $SGeLimpezas = "Serviços Gerais e Limpezas";
         ?>

                    <img src="{{asset('findeela/limpeza.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Serviços Gerais e Limpezas</h5>
                        <p class="card-text">Encanadores, profissonais da rede elétrica, desentupidores, domésticas...</p>
                        </div><br><br><br>
           <div class="card-footer"
            style="position:absolute !important; bottom:0 !important; width:100% !important; background-color: transparent !important;text-align: center !important;">
            <a href="/categoriacli/{{$SGeLimpezas}}" class="btn btn-warning">Mais Detalhes</a>
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
            <a href="/categoriacli/Serviços%20de%20Transportes" class="btn btn-warning">Mais Detalhes</a>
          </div>
                </div>

            </div>
        </div>

        <?php
         $ServicosFreela = "Serviços%20de%20Freelancer";
         ?>

        <div class="row">
            <div class="card-deck">
            <div class="card" id="card-cat">
                <img src="{{asset('findeela/freela.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Serviços de freelancer</h5>
                        <p class="card-text">Programadores, desenvolvedores, designers, fotógrafos....</p>
                         </div><br><br><br>
           <div class="card-footer"
            style="position:absolute !important; bottom:0 !important; width:100% !important; background-color: transparent !important;text-align: center !important;">
            <a href="/categoriacli/{{$ServicosFreela}}" class="btn btn-warning">Mais Detalhes</a>
          </div>
                </div>

                
        <?php
         $ProfissionaisdaSaude = "Profissionais da Saúde";
         ?>

                <div class="card" id="card-cat">
                <img src="{{asset('findeela/profsaude.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Profissonais da Saúde</h5>
                        <p class="card-text">Personal's trainers, nutricionistas, pessoas do ramo dos suplementos legais, professores particulares de musculação e acadêmia.</p>
                       </div><br><br><br>


        <div class="card-footer"
          style="position:absolute !important; bottom:0 !important; width:100% !important; background-color: transparent !important;text-align: center !important;">
          <a href="/categoriacli/{{$ProfissionaisdaSaude}}" class="btn btn-warning">Mais Detalhes</a>
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
            <a href="/categoriacli/Alimentícios%20e%20Cozinha" class="btn btn-warning">Mais Detalhes</a>
          </div>
                </div>



            </div>
        </div>
      <div class="row">
            <div class="card-deck">
            <div class="card" id="card-cat">
         <?php
         $nomeFestivos = "Festivos";
         ?>

                <img src="{{asset('findeela/festivos.jpg')}}" class="card-img-top" alt="...">

                    <div class="card-body">
                        <h5 class="card-title">Festivos</h5>
                        <p class="card-text">Animadores, organizadores de enventos, churrasqueiros para festas, doceiros para festas, arranjo para flores e buquês de casamento e festas...</p>
                        </div><br><br><br>
          <div class="card-footer"
            style="position:absolute !important; bottom:0 !important; width:100% !important; background-color: transparent !important;text-align: center !important;">
            <a href="/categoriacli/{{$nomeFestivos}}" class="btn btn-warning">Mais Detalhes</a>
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
            <a href="/categoriacli/Babás%20e%20Cuidadoras" class="btn btn-warning">Mais Detalhes</a>
          </div>
                </div>

                <div class="card" id="card-cat">
                <img src="{{asset('findeela/barbeiro.jpg')}}" class="card-img-top" alt="...">

                    <div class="card-body">
         <?php
         $nomeBeleza = "Beleza";
         ?>

                        <h5 class="card-title">Beleza</h5>
                        <p class="card-text">Cabelereiros, maquiadores, manicures, pessoas que trabalham com aluguéis de roupas...</p>
                        </div><br><br><br>
           <div class="card-footer"
            style="position:absolute !important; bottom:0 !important; width:100% !important; background-color: transparent !important;text-align: center !important;">
            <a href="/categoriacli/{{$nomeBeleza}}" class="btn btn-warning">Mais Detalhes</a>
          </div>
                </div>



            </div>
        </div>
    </div>
    </div>

<!-- modal sobre sugestão -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sugerir nova categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action = "/listarcategoriascli/enviar" method="POST">
            @csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Categoria Sugerida:</label>
            <input type="text" class="form-control" id="recipient-name" name="categoria"
             >
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Deixe-nos um porquê (Opcional):</label>
            <textarea class="form-control" id="message-text" name="motivo"
            ></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="exit" class="btn btn-secondary" id="buttonsair" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary" id="buttonenv">Enviar sugestão</button>
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
          <form action="telaLogandoUser.php" method="POST">
            <div class="field">
              <button type="submit" class="btn btn-success btn-lg btn-block btn-fullwidth btn-a"
                style="background-color:orange!important;" href=""
                id="btnLogin" >Cliente</button>
            </div>
          </form>

          <!-- <form action="TelaCadastroPrestador/index.html" method="POST"> -->
          <form action="telaLogandoAnun.php" method="POST">


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
