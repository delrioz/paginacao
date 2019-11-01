
<!DOCTYPE html>
<!-- # "current" => "anuncio"]) -->
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


    #btn-search {
    background: rgb(87, 13, 119);
    color: #fff;
    border-color: purple;
}

</style>
<body>

  @extends('layouts.navbarclientespainel')


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
     <h3>Serviços Avaliados</h3>
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
            <th scope="col">Titulo</th>
            <th scope="col">Comentário</th>
            <th scope="col">Publicação</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col">Ações</th>





        </tr>

        @foreach($mservicos as $servc)

            <tr>

          <td>

            <!-- <img
              src="./imgs/imagem2.jpeg"
              class="img-thumbnail"
              alt="thumbnail"
              style="width: 200px"
            /> -->
          </td>
            <?php

            $max = 20;
            $str = " $servc->titulo ";
            $result=  substr_replace($str, (strlen($str) > $max ? '...' : ''), $max);


            $max2 = 15;
            $str2 = " $servc->comentario ";
            $resultComent=  substr_replace($str2, (strlen($str2) > $max2 ? '...' : ''), $max2);


             ?>



                <td>{{ $result }} </td>
                <td>{{ $resultComent}}</td>
                <td>{{ $servc->anuncios_id }}</td>
                <td></td>
                <td></td>

              <td>





                 <a  href="/Canuncios/feed/{{ $servc->anuncios_id }}"

             class="btn btn-warning  btn-details">Acompanhar</a>


             <a  href="/CComentarios/editar/{{ $servc->id }}"
             class="btn btn-primary  btn-details">Editar</a>



            <a href="/CComentarios/apagar/{{ $servc->id }}"  class="btn btn-danger btn-group"
          onclick="return confirm('Deseja realmente excluir o comentário?');">

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
    <h5>Você ainda não realizou nenhuma avaliação</h5><strong><a href="/cliente" class="btn btn-warning">NAVEGAR<a/></strong>
     <div class="container">
        </div>
     </div>
@endif

  </div>


</body>

</html>
