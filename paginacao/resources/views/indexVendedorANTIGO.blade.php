<!DOCTYPE html>
<html lang="pt-br">

<head>
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
  <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">



  <title>Conex</title>
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


</style>

<body>



  <!--NAVBAR-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: #FFA500">
    <a class="navbar-brand" href="#" id="logoConex">Conex</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
  

        <li class="nav-item active">
          <a class="nav-link" href="todosanuncios">Todos Anúncios</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="temasanuncio.php">Listar Categorias</a>
        </li>

        <!-- <li class="nav-item active">
          <a class="nav-link" href="../restrito">Área Restrita</a>
        </li> -->

        <li class="nav-item active">
          <a class="nav-link" data-toggle="modal" data-target="#modalLogin">Logar</a>
        </li>

        
        <li class="nav-item active">
          <a class="nav-link" href="/paineladministrador">Painel Administrador</a>
        </li>

        <li class="nav-item dropdown">
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
                            </li>
           
        

      </ul>
      <form class="form-inline my-2 my-lg-0">
        
        <input class="form-control mr-sm-2" type="busca" placeholder="Digite o serviço o qual procura"
          aria-label="busca" size="70">
        <button class="btn btn-outline-warning my-2 my-sm-0" type="submit" id="btnRoxo">Pesquisar</button>
      </form>
    </div>
  </nav>







  <!--Carousel--><br>

  <div class="container">
    <div class="row">
      <div class="col-lg-2">
        <ul class="list-group">
          <a href="todosmei.php" class="list-group-item">MEI</a>
          <a href="todasdiaristas.php" class="list-group-item">Diarista</a>
          <a href="todascozinheiras.php" class="list-group-item">Cozinheira</a>
          <a href="todospedreiros.php" class="list-group-item">Pedreiro</a>
          <a href="temasanuncio.php" class="list-group-item">Listar Temas</a>
        </ul>
      </div>
      <div class="col-lg-10" id="slider">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../imgs/imagem1.jpeg" class="d-block w-100" alt="imagem1">
            </div>
            <div class="carousel-item">
              <img src="../imgs/imagem2.jpeg" class="d-block w-100" alt="imagem2">
            </div>
            <div class="carousel-item">
              <img src="../imgs/imagem3.jpeg" class="d-block w-100" alt="imagem3">
            </div>a
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

    </div>
  </div>



  <!--POST AREA-->
  <div class="container">
    <div class="row">
      <div class="col-lg-12" id="titles">
        <h1>Anúncios Encontrados:</h1>
      </div>
    </div>


@if(count($anuncios)>0)



 <div class="row" href="">
    
      <div class="card-deck " style= " max-width: 1500px;"  >
@foreach($anuncios as $anuncio)


    <?php    
    
            $max = 50;
            $str = " $anuncio->sobre ";
            $result=  substr_replace($str, (strlen($str) > $max ? '...' : ''), $max);     
             ?>

        <div class="card">
          <img src="../imgs/encanador.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $anuncio->titulo }}</h5>

            <p class="card-text">{{$result}}</p>
            <!--  <button type="button" class="btn" data-toggle="modal" data-target="#modalQuickView">Mais
              Detalhes</button> -->
        <br>
          </div><br><br><br>
          <div class="card-footer"
            style="position:absolute !important; bottom:0 !important; width:100% !important; background-color: transparent !important;text-align: center !important;">
            <a  href="/anuncios/{{ $anuncio->id }}"
            
             class="btn btn-warning  btn-details">Mais Detalhes</a>
          </div>
        <br>

        </div>
        
@endforeach


@endif


@if(count($anuncios)<=0)
   
   <div class="alert alert-danger" role="alert">
    Ainda não temos anúncios publicados
  </div>


@endif



    

      </div>
    </div>
  </div>


  <!-- MODAL SOBRE O PRODUTO --->





<!-- Footer -->
<footer class="page-footer font-small blue pt-4" id="footer">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">conexCon</h5>
        <p>A startup que veio para facilitar a conexão entre prestadores de serviços 
        e seus clientes !</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Siga-nos</h5>

        <ul class="list-unstyled id=links">
          <li>
            <a href="#!">Facebook</a>
          </li>
          <li>
            <a href="#!">Twitter</a>
          </li>
          <li>
            <a href="#!">LinkedIn</a>
          </li>
          <li>
            <a href="#!">Instagram</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3 " id=links>

        <!-- Links -->
        <h5 class="text-uppercase">Abas</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Home</a>
          </li>
          <li>
            <a href="#!">Login</a>
          </li>
          <li>
            <a href="#!">Cadastro</a>
          </li>
          <li>
            <a href="#!">Feedbacks</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->






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