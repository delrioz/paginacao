
<!DOCTYPE html>
<!-- # "current" => "anuncio"]) -->
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


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


    #btnRoxo{
    background: rgb(87, 13, 119);
    color: #fff;
    border-color: purple;

}


</style>
<body>

   @extends('layouts.navbaranunciantespainel')



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
            <th scope="col">Titulo</th>
            <th scope="col">Comentário</th>
            <th scope="col">Publicação</th>
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

            $max = 10;
            $str = " $servc->sobre ";
            $result=  substr_replace($str, (strlen($str) > $max ? '...' : ''), $max);


            $max2 = 15;
            $str2 = " $servc->endereco ";
            $resultEndereco=  substr_replace($str2, (strlen($str2) > $max2 ? '...' : ''), $max2);


            $max3 = 20;
            $str3 = " $servc->titulo ";
            $resulTitulo=  substr_replace($str3, (strlen($str3) > $max3 ? '...' : ''), $max3);


            $max4 = 20;
            $str4 = " $servc->comentario ";
            $resultComent=  substr_replace($str4, (strlen($str4) > $max4 ? '...' : ''), $max4);


             ?>

          <td>{{ $resulTitulo}} </td>
          <td>{{ $resultComent }}</td>
          <td>{{ $servc->anuncios_id }}</td>

              <td>
                 <a  href="/anuncios/feed/{{ $servc->anuncios_id }}"

             class="btn btn-warning  btn-details">Mais Detalhes</a>
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
    <h5>Você ainda não possui nenhuma avaliação</h5><br>
    <a href="/painelvendedor" class="btn btn-warning">Voltar</a>

     <div class="container">
        </div>
     </div>
@endif

  </div>


</body>

</html>
