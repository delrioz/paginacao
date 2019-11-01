<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Heroic Features - Start Bootstrap Template</title>

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
        <form action= "/anuncios/search" class="form-inline my-2 my-lg-0">
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
    <header class="jumbotron my-4">
      <h1 class="display-3">Painel de buscas</h1>
      <p class="lead"><h3>Filtramos sua pesquisa  por :</h3><strong></strong></p>
      <!-- <a href="#" class="btn btn-primary btn-lg">Call to action!</a> -->
    </header>
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



              <div class="box-header">
            <form action="/clienteAnuncios/filtragem" method="POST" class="form form-inline">
              @csrf

              <input type="text" name="titulo" id="" class = "form-control" placeholder = "Título">

              <input type="text" name="sobre" id="" class = "form-control" placeholder = "Sobre">

                <select name="categoria" id="" class = "form-control">
                      <option value="">Tipo</option>

                  @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->name }}">{{ $categoria->name }}</option>
                  @endforeach


                </select>

               <button type="submit" class="btn btn-primary" id=btnRoxo>Pesquisar</button>
            </form>
            <br>

              </div>

  @if(count($anuncios)>0)

      <!-- Page Features -->
      <div class="row text-center">
  @foreach($anuncios as $anuncio)
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card h-100">
            <img>
            <div class="card-body">
              <h4 class="card-title">{{$anuncio->titulo}}</h4><br>
              <p class="card-text">{{$anuncio->sobre}}</p>
            </div>
            <div class="card-footer">
              <a href="/Canuncios/{{ $anuncio->id }}"
               class="btn btn-primary" id="btnRoxo">Mais Informações</a>
            </div>
          </div>
        </div>

  @endforeach
  @endif

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
