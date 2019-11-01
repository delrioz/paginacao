
<!DOCTYPE html>
<!-- # "current" => "anuncio"]) -->
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="./estilo.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <title>Conex</title>
</head>

<style>

    #footer{
        color: white;

        background: purple;


    }

    #links{
        background: orange;
    }

</style>
<body>

  <!--NAVBAR-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: #FFA500">
    <a class="navbar-brand" href="#">Conex</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href=".././main/index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Sobre</a>
        </li>


        <li class="nav-item active">
          <a class="nav-link" href="../restrito">Área Restrita</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href=".././main/todosanuncios">Todos Anúncios</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href=".././main/temasanuncio.php">Listar Temas</a>
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



</header>


<div class="container-fluid" >
    <div class="container search-table">
           <div class="meusposts">
    <br />
    <br />
    <br />
<br>
     <div class="search-list" id="servicosanunciados">
     <h3>Meus serviços Anunciados:</h3>
  </div><br>

@if(count($mservicos)>0)
    <div class="col-md-12">
    <table class="table">
      <thead>
        <tr>



      </thead>
      <tbody>
        <tr>
            <th scope="col"></th>
            <th scope="col">Imagem</th>
            <th scope="col">Título</th>
            <th scope="col">Categoria</th>
            <th scope="col">Endereco</th>
            <th scope="col">Complemento</th>
            <th scope="col">Sobre</th>
            <th scope="col">Ações</th>




        <tr>

          <td>
        @foreach($mservicos as $servc)
            <!-- <img
              src="./imgs/imagem2.jpeg"
              class="img-thumbnail"
              alt="thumbnail"
              style="width: 200px"
            /> -->
          </td>
            <?php

            $max = 10;
            $str = " $servc->sobre ";
            $result=  substr_replace($str, (strlen($str) > $max ? '...' : ''), $max);


            $max2 = 15;
            $str2 = " $servc->endereco ";
            $resultEndereco=  substr_replace($str2, (strlen($str2) > $max2 ? '...' : ''), $max2);


             ?>

          <td>{{ $servc->imagem }} </td>
          <td>{{ $servc->titulo }}</td>
          <!-- <td>{{ $servc->categoria }}</td> -->
          <td>{{ $servc->categoria }}</td>
          <td>{{ $resultEndereco }}</td>
          <td>{{ $servc->complemento }}</td>
          <!-- <td>{{ $servc->data }}</td> -->
          <td>{{ $result}}</td>
          <!-- <td>{{ $servc->id }}</td> -->


            <!-- <td class="td-actions"><a class="btn btn-small btn-success"
            href="cadastroskael/indexsobreanuncio">V</i></a>
            <td class="td-actions"><a class="btn btn-small btn-danger"
              onClick="return confirm('Deseja realmente exluir o post?')">X</i></a>
            </td>
              -->
              <td>
               <!-- <a href=meuservicos/{{ $servc->id }}>Visualizar</a> -->

              <a href="/meuservicos/editar/{{ $servc->id }}" class="btn btn-primary btn-group">Editar</a>
               <!-- <a href="/meuservicos/apagar/{{ $servc->id }}"
               class="btn btn-danger">Apagar</a> -->

              <a href="/meuservicos/apagar/{{ $servc->id }}"  class="btn btn-danger btn-group"
               onclick="return confirm('Deseja realmente excluir o usuario?');">
                        Remover</a>

              </td>
        </tr>
        </tr>
      @endforeach
      </tbody>
    </table>
    </div>
@endif

@if(count($mservicos)<=0)
    <div class="alert alert-danger" role="alert">
    <h5>Você não tem nenhum anúncio publicado ainda</h5>
     <div class="container">
        <strong><a href="anunciarpostspainel">ANUNCIAR</strong></a>
        </div>
     </div>
@endif

  </div>


</body>

</html>
