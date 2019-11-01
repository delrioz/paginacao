@extends('adminlte::page')

@section('title', 'Conex')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    
<style>

backgroun-color:green; /
</style>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
  Olá, usuário! seja bem vindo ao <strong> painel do administrador!</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div><br>
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
     <strong>Área administrativa</strong><p><h3>Bem vindo ao meu painel </h3><br></p>
    
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Meus Dados</h5>
        <p class="card-text">Tenha acesso aos dados da sua conta podendo editálos</p>
        <a href="cadastroskael/indexmeusdados.html" class="btn btn-warning">Meus Dados</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Meus Posts</h5>
        <p class="card-text">Acesse todos as publicações podendo editar ou deletar as mesmas</p>
        <a href="meusposts.php" class="btn btn-info">Meu Posts</a>
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
        <a href="meusfeedbacks.php" class="btn btn-primary">Meus Feedbacks</a>
     </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Cadastrar Novo Post</h5>
        <p class="card-text">Adicione outro !</p>
        <a href="cadastroskael/indexcadastroanuncio.html" class="btn btn-success">Anunciar</a>
      </div>
    </div>
    </div>

</div>
</div>

</div>





@stop