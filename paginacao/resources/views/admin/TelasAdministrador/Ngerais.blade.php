@section('index-content')


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="estilo.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <link href="{{asset(('css/mdb/css/bootstrap.min.css'))}}" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">


  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="estilo.css">

<style type="text/css">

    body {
        color: #566787;
    background: #f5f5f5;
    font-family: 'Varela Round', sans-serif;
    font-size: 16px;
    }


	.table-wrapper {
        background: #fff;
        padding: 20px 25px;
        margin: 30px 0;
		border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-title {
		padding-bottom: 15px;
		background: #590670;
		color: #fff;
		padding: 16px 30px;
		margin: -20px -25px 10px;
		border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
		margin: 5px 0 0;
		font-size: 24px;
	}
	.table-title .btn {
		color: #566787;
		float: right;
		font-size: 13px;
		background: #fff;
		border: none;
		min-width: 50px;
		border-radius: 2px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}
	.table-title .btn:hover, .table-title .btn:focus {
        color: #566787;
		background: #f2f2f2;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
    }
	table.table tr th:first-child {
		width: 60px;
	}
	table.table tr th:last-child {
		width: 100px;
	}
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table td:last-child i {
		opacity: 0.9;
		font-size: 22px;
        margin: 0 5px;
    }
	table.table td a {
		font-weight: bold;
		color: #566787;
		display: inline-block;
		text-decoration: none;
	}
	table.table td a:hover {
		color: #2196F3;
	}
	table.table td a.settings {
        color: #2196F3;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table .avatar {
		border-radius: 50%;
		vertical-align: middle;
		margin-right: 10px;
	}
	.status {
		font-size: 30px;
		margin: 2px 2px 0 0;
		display: inline-block;
		vertical-align: middle;
		line-height: 10px;
	}
    .text-success {
        color: #10c469;
    }
    .text-info {
        color: #62c9e8;
    }
    .text-warning {
        color: #FFC107;
    }
    .text-danger {
        color: #ff5b5b;
    }
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }
    .pagination li a:hover {
        color: #666;
    }
    .pagination li.active a, .pagination li.active a.page-link {
        background: #03A9F4;
    }
    .pagination li.active a:hover {
        background: #0397d6;
    }
	.pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;

    }
</style>

  @extends('layouts.sidebaradmin')

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



<script type="text/javascript">
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>
<body>
    <div class="container">
   
    <div class="row" >


 <br>
 <br>


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
<br>
<div class="row">
<div class="col-sm-6">
<div class="card">
<div class="card-body">
<h5 class="card-title">Número de anunciantes Cadastrados:</h5>
@if(count($AnunNumero)>0)

@foreach($AnunNumero as $acesso)
<h4 class="card-text" style ="text-align:center;">{{$acesso->total}}</h4>
@endforeach
@endif 

@if(count($AnunNumero)<=0)

<h4 class="card-text" style ="text-align:center;">0</h4>

@endif


<a href="/admin/acessarvendedores"
class="btn btn-warning">Acessar</a>
</div>
</div>
</div>


<div class="col-sm-6">
<div class="card">
<div class="card-body">
<h5 class="card-title">Número de clientes Cadastrados</h5>

@if(count($CliNumero)>0)

@foreach($CliNumero as $Cacesso)
<h4 class="card-text" style ="text-align:center;">{{$Cacesso->total}}</h4>
@endforeach
@endif 


@if(count($CliNumero)<=0)
<h4 class="card-text" style ="text-align:center;">0</h4>
@endif 



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
@foreach($MEInumero as $MEInumero)
<h5 class="card-title">Número de Profissionais MEI</h5>
<h4 class="card-text" style ="text-align:center;">{{$MEInumero->total}}</h4>
<a href="/qtMei" class="btn btn-primary">Visualizar</a>
</div>
</div>
</div>
@endforeach




<div class="col-sm-6">
<div class="card">
<div class="card-body">
<h5 class="card-title">Número de Anúncios</h5>

@foreach($NumeroAnuncios as $NumeroAnuncios)
<h4 class="card-text" style ="text-align:center;">{{$NumeroAnuncios->total}}</h4>
@endforeach




<!-- <h4 class="card-text" style ="text-align:center;">0</h4> -->





<a href="/admin/navegando" class="btn btn-success">Acessar</a>

</div>
</div>
</div>


</div>
</div>

</div>


            </div>




    <!-- modal adicionar clientes  -->




<!-- line modal -->
<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
			<h3 class="modal-title" id="lineModalLabel">Cadastrar Cliente</h3>
		</div>
		<div class="modal-body">

            <!-- content goes here -->
          <form method="POST" action="/admin/acessarclientes/criar" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="exampleInputEmail1"  name ="name" placeholder="Digite um Nome">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="text" class="form-control" id="exampleInputEmail1"  name ="email"placeholder="Enter email">
              </div>


              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password"  id="exampleInputPassword1" placeholder="Password">
              </div>


              <div class="form-group">

                <label for="exampleFormControlFile1">Exemplo de input de arquivo</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1"
                    name="image">

              </div>



            <!-- <div class="custom-file">
              <input type="file" class="custom-file-input" id="image" name="image">
              <label class="custom-file-label" for="image">Escolha uma imagem</label>
            </div> -->


              <div class="checkbox">
                <label>
                  <input type="checkbox"> Check me out
                </label>
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>

		</div>

		</div>
	</div>
  </div>
</div>

@stop

<!--fim da modal -->

</body>
</html>
