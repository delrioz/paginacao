

<!DOCTYPE html>
<html lang="en">
<head>
<title>Editando Profile</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>



    <br><br><br>





  <!--NAVBAR-->
  <!--NAVBAR-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: #FFA500">

    <a href="/anuncios"  style="font-size:20px; color:black!important;" color= "purple";><img src="{{ asset('findeela/Findeela BandW.png') }}"
     alt="Findeela.png" style="width:36px;height:50px;color:black;">Findeela</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">

          <a class="nav-link" href="/painelvendedor" style="margin-left: 6px;">Home <span class="sr-only">(current)</span></a>
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


        <!-- <li class="nav-item active">
          <a class="nav-link" href="/paineladministrador">Painel Administrador</a>
        </li> -->
        
        <li class="nav-item active">
          <a class="nav-link" href="/anuncios">Todos Anúncios</a>
        </li>



        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/meu-perfil') }}">Meus Dados </a>
        </li>


        <li class="nav-item active">
          <a class="nav-link" href="/sobre">Sobre Nós</a>
        </li>


      </ul>



   <form  method="POST" action= "/VendedorAnuncios/search" class="form-inline my-2 my-lg-0">
      @csrf
        <input class="form-control mr-sm-2" type="busca" placeholder="Digite o serviço o qual procura"
          aria-label="busca" size="70" name="text">
        <button class="btn btn-outline-warning my-2 my-sm-0" type="submit" id="btnRoxo">Pesquisar</button>
      </form>


    <ul class="navbar-nav mr-2">

    <li class="nav-item dropdown" id="liLogado">
       <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
           {{auth()->user()->name}} <span class="caret"></span>
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

</div>


  </nav>

<style>

    #footer{
        color: white;

        background: purple;


    }

    #links{
        background: orange;
    }

    .card{
        border: 1px solid orange ;
    }

    #btn-search {
    background: rgb(87, 13, 119);
    color: #fff;
    border-color: purple;
}

 #btnRoxo{
    background: rgb(87, 13, 119);
    color: #fff;
    border-color: purple;
}


</style>
<body>



<header>



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
    
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  Olá, {{ Auth::user()->name }} ! seja bem vindo ao <strong> painel do administrador!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div><br>

  <a href="/myviews" class="btn btn-warning" id="btnRoxo">Meus Relatórios</a>


  <a href="/anuncios" class="btn btn-warning">Navegar</a>

  <a href="/reportar-anunc" class="btn btn-warning">Reportar</a>

  <!-- <a href="/Newcadastrarservico" class="btn btn-warning">Novo cadastro produtos</a> -->


<div class="row" >


</header>


    <div class="alert">


    </div>

<div class="container" >
	<div class="container search-table">
            <div class="search-box">
                <div class="row">
                	<br>
                    <div class="col-md-3">
                    </div>



                    </div>
                </div>
            </div>




    <div class="search-list">
     <strong>Área administrativa</strong><p><br></p>

<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Meus Dados</h5>
        <p class="card-text">Tenha acesso aos dados da sua conta podendo editálos</p>
        <a href="{{ url('/meu-perfil') }}"
        class="btn btn-warning">Meus Dados</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Meus Posts</h5>
        <p class="card-text">Acesse todos as publicações podendo editar ou deletar as mesmas</p>
        <a href="/meuservicos" class="btn btn-info">Meu Posts</a>
      </div>
    </div>
    </div>

</div>
<br>
    <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Meus Feedback's</h5>
        <p class="card-text">Tenha acesso aos comentários realizados sobre você e seus serviços</p>
        <a href="/meusfeedbackspainel" class="btn btn-primary">Meus Feedbacks</a>
     </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Cadastrar Novo Post</h5>
        <p class="card-text">Adicione outro !</p>
        <a href="/Newcadastrarservico" class="btn btn-success">Anunciar</a>
      </div>
    </div>
    </div>

</div>
</div>

</div>



<script>
$('#myAlert').on('closed.bs.alert', function () {
  // do something…
})
</script>


</body>
