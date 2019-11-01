
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



    #btnRoxo {
    background: rgb(87, 13, 119);
    color: #fff;
    border-color: purple;
}



</style>
<body>

<header>

  @extends('layouts.navbaranunciantespainel')


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




@if($errors->any())
     @foreach($errors->all() as $error)
        <div class="alert alert-danger">

      {{ $error }}
        </div>

      @endforeach

 @elseif(session()->has('success'))
         <div class="alert alert-success">

       {{ session('success') }}
 @endif
        </div>




@if(count($mservicos) > 0)

<div class="container">
  <div class="row">
    <div class="col-12">
		<table class="table table-image">
		  <thead>
		    <tr>
		      <th scope="col"></th>
            <th scope="col">Imagem</th>
            <th scope="col">Título</th>
            <th scope="col">Categoria</th>

            <th scope="col">Sobre</th>
            <th scope="col">Visualizações</th>
            <th scope="col">Ações</th>
		    </tr>
		  </thead>
		  <tbody>
@foreach($mservicos as $servc)
		    <tr>
        <?php

        $max = 10;
        $str = " $servc->sobre ";
        $result=  substr_replace($str, (strlen($str) > $max ? '...' : ''), $max);


        $max2 = 15;
        $str2 = " $servc->endereco ";
        $resultEndereco=  substr_replace($str2, (strlen($str2) > $max2 ? '...' : ''), $max2);


        $max = 20;
        $str = " $servc->titulo ";
        $result2=  substr_replace($str, (strlen($str) > $max ? '...' : ''), $max);


        $max = 15;
        $str = " $servc->categoria ";
        $cat=  substr_replace($str, (strlen($str) > $max ? '...' : ''), $max);


        ?>
		      <th scope="row"></th>
		      <td class="w-25">
			      <img src="/storage/{{$servc->image}}" class="img-fluid img-thumbnail"
            style="width: 200px; height:170px;"alt="Sheep">
		      </td>
		      <td>{{$result2}}</td>
		      <td>{{$cat}}</td>

          <td>{{ $result}}</td>

          <td>{{$servc->visualizacoes}}</td>

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
@endforeach
@endif

@if(count($mservicos) == 0)

    <div class="container">

        <div class="alert alert-danger" role="alert">
        Você ainda não anunciou
        </div>
        <a href="/painelvendedor" class="btn btn-danger">Voltar</a>
        <a href="/Newcadastrarservico" class="btn btn-warning" >Anunciar</a>
    </div>

@endif



		  </tbody>
		</table>
    </div>
  </div>
</div>


</body>

</html>
