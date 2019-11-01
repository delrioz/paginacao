
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/app.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

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

  @extends('layouts.navbarclientespainel')

<header>

<br><br><br>




 @if(session()->has('success'))
         <div class="alert alert-success">

       {{ session('success') }}
 @endif
        </div>
        <br>


<div class="alert alert-warning alert-dismissible fade show" role="alert">
  Olá, {{auth()->guard('cliente')-> user()->name}}! seja bem vindo ao <strong> painel do administrador!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div><br>


</div><br>

  <a href="/listarcategoriascli" class="btn btn-warning" id="btnRoxo">Categorias</a>


  <a href="/cliente" class="btn btn-warning">Navegar</a>

  <!-- <a href="/reportar" class="btn btn-warning">Reportar problema</a> -->

  <!-- <a href="/Newcadastrarservico" class="btn btn-warning">Novo cadastro produtos</a> -->

<div class="row" >

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
     <strong>Área administrativa</strong><p><h3></h3><br></p>

<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Meus Dados</h5>
        <p class="card-text">Tenha acesso aos dados da sua conta podendo editálos</p>
        <a href="/meu-perfilCliente" class="btn btn-warning">Meus Dados</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Meus Comentários</h5>
        <p class="card-text">Aqui Você tem acesso a todos os seus comentários</p>
        <a href="/Cmeuscomentarios" class="btn btn-success">Meus Comentários</a>
      </div>
    </div>
    </div>

</div>
<br>


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
