<!DOCTYPE html>
<html lang="en">

<head>

  <title>Findeela- Filtros</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo asset('vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo asset('css/heroic-features.css')?>" rel="stylesheet">

</head>

<body>

  <!--NAVBAR-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: #FFA500">
    <a class="navbar-brand" href="#" id="logoConex">Conex</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
          <link rel="stylesheet" href="estilo.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"></script>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
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


#containerSearch{
  /* background-color: red; */
  color:border solid 20px blue;
}

  #h3jumbotron{

     text-align:center;

  }


  #jumbotron {

    background-color: #ffaa00;

  }



</style>

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
          <a class="nav-link" href="/listarcategorias">Listar Categorias</a>
        </li>


        <li class="nav-item active">
          <a class="nav-link" href="/sobre">Sobre Nós</a>
        </li>


        <!-- <li class="nav-item active">
          <a class="nav-link" href="../restrito">Área Restrita</a>
        </li> -->

        <li class="nav-item active">
          <a class="nav-link" data-toggle="modal" data-target="#modalLogin">Logar</a>
        </li>


        <li class="nav-item active">
          <a class="nav-link" href="/Cpaineladministrador">Painel Administrador</a>
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

        <form  method="POST" action= "/disciplinas/search" class="form-inline my-2 my-lg-0">
      @csrf
        <input class="form-control mr-sm-2" type="busca" placeholder="Digite o serviço o qual procura"
          aria-label="busca" size="70" name="text">
        <button class="btn btn-outline-warning my-2 my-sm-0" type="submit" id="btnRoxo">Pesquisar</button>
      </form>

    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4" id="jumbotron">
       <h2 id="h3jumbotron">Painel de buscas</h2>
      <p>Filtramos sua busca por:</p><strong></strong>
    </header>



  @if(count($anuncios)>0)

              <div class="container" id="containerSearch">
              <div class="box-header">
            <form action="/todosanunciosvend/search2" method="POST" class="form form-inline">
              @csrf

              <input type="text" name="titulo" id="" class = "form-control" placeholder = "Título">
                    <div class="md md-12">
                    </div>
              <!-- <input type="text" name="sobre" id="" class = "form-control" placeholder = "Sobre"> -->

                <select name="categoria" id="" class = "form-control ml-2" >
                      <option value="" type="disabled">Categoria</option>

                  @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->name }}">{{ $categoria->name }}</option>

                  @endforeach


                </select>

                  <div class="md md-12">
                    </div>

               <button type="submit" class="btn btn-primary ml-2" id=btnRoxo>Pesquisar</button>
            </form>
            <br>

              </div>
     </div>
  @endif






  <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
            @foreach($anuncios as $anuncio)
               <?php

                  $max = 50;
                  $str = " $anuncio->sobre ";
                  $result=  substr_replace($str, (strlen($str) > $max ? '...' : ''), $max);

             ?>

                <div class="col-md-4">
                  <div class="card mb-4 shadow-xs">

                    <div class="card-body">
                      <h5 class="card-title"><strong>{{ $anuncio->titulo }}</strong></h5><br>
                      <p class="card-text"><strong>{{ $result }}</p></strong>
                      <br>
                      <br>
                      <br>


                      <div class="d-flex justify-content-between align-items-center">
                          <!--button type="button" class="btn btn-sm btn-outline-secondary">Download</button-->
                           <div class="card-footer"
                            style="position:absolute !important; bottom:0 !important; width:80% !important; background-color: transparent !important;text-align: center !important;">
                            <a  href="/anuncios/{{ $anuncio->id }}"

                            class="btn btn-warning  btn-details">Mais Detalhes</a>
                        </div>
                          <form method="anuncio" action="/{{$anuncio->id}}">
                            @csrf

                          </form>
                      </div>
                    </div>
                  </div>
                </div>
            @endforeach
          </div>
          </div>
        </div>
      </div>
    </main>














@if(count($anuncios)==0)

    <div class="container">
        <div class="alert alert-danger" role="alert">
         Nenhum anuncio foi encontrado em nossa base de dados.
          </div>
    </div>

@endif






    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; conex 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
