
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="estilo.css">


    <title>Findeela</title>
</head>

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


</style>
<body>
 <!--NAVBAR-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: #FFA500">
    <a href="/cliente"><img src="{{ asset('findeela/Findeela BandW.png') }}"
     alt="Findeela.png" style="width:36px;height:50px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/homeAdmin">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/sobre">Sobre</a>
        </li>




        <li class="nav-item active">
          <a class="nav-link" href="/admin/navegando">Todos Anúncios</a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="/admin/acessartemassugeridos">Listar Temas</a>
        </li>


        <li class="nav-item active">
          <a class="nav-link" href="/admin/novoadmin/new/">Novo Admin</a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="/Ngerais">Quantos Cadastrados</a>
        </li>



      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="busca" placeholder="Digite o serviço o qual procura"
          aria-label="busca" size="70">
        <button class="btn btn-outline-warning my-2 my-sm-0"  id="btn-search" type="submit">Pesquisar</button>
      </form>
    </div>
  </nav>

<header>

<br><br><br>


<div class="alert alert-warning alert-dismissible fade show" role="alert">
  Olá, {{ Auth::user()->name }} ! seja bem vindo ao <strong> painel do administrador!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div><br>

<div class="row" >

         <div class="container">
         <a href="/admin/novoadmin" class="btn btn-warning">Visualizar Admin's !</a>
         </div>
          <br>
          <br>
  
         <div class="container">
         <a href="/admin/categorias" class="btn btn-warning" id="btn-search">Categorias mais acessadas!</a>
         </div>

</header>


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
     <strong>Área administrativa</strong<a class="navbar-brand"><br><br>

<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Anunciantes</h5>
        <p class="card-text">Acesso e controle de todos anunciantes cadastrados</p>
        <a href="/admin/acessarvendedores"
        class="btn btn-warning">Acessar</a>
      </div>
    </div>
  </div>


  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Clientes</h5>
        <p class="card-text">Acesso e controle de todos clientes cadastrados</p>
        <a href="/admin/acessarclientes" class="btn btn-info">Acessar</a>
      </div>
    </div>
    </div>

</div>
<br>

<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Temas Sugeridos</h5>
        <p class="card-text">Temas sugeridos pelos usuários</p>
        <a href="/admin/acessartemassugeridos" class="btn btn-primary">Visualizar</a>
     </div>
    </div>
  </div>


  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Relatórios</h5>
        <p class="card-text">Acessar todos relatórios</p>
        <a href="/admin/acessarclientes" class="btn btn-success">Acessar</a>
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

</html>
