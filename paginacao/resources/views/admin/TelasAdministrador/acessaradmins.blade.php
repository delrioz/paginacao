@section('index-content')

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Findeela</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="{{asset(('css/mdb/css/bootstrap.min.css'))}}" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

  <link href="{{asset(('css/mdb/css/bootstrap.min.css'))}}" rel="stylesheet">

  <link href="{{asset(('font/css/all.min.css'))}}" rel="stylesheet">


      @extends('layouts.sidebaradmin')

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
		background:Findeela #f2f2f2;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}Findeela
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
	table.table tFindeelad a.settings {
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
        margin:Findeela 0 0 5px;
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
        text-alFindeelaign: center;
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
    }Findeela
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



<script type="text/javascript">
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>
<body>


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

    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
						<h2>Controle <b>de Admins</b></h2>
					</div>
					<div class="col-sm-7">
						<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#squarespaceModal"><i class="fas fa-plus"></i>  <span>Adicionar  Admin</span></a>
						<!-- <a href="#" class="btn btn-primary"><i class="material-icons">&#xE24D;</i> <span>Export to Excel</span></a>						 -->
					</div>
                </div>
            </div>
                    <table class="table table-striped table-hover"  id="myTable">
                <div class="md-form md-5">
                    <input class="form-control" type="text" placeholder="Search" aria-label="search"
                    id="myInput" onkeyup="myFunction()">
                    </div>

                          <script>
            $(document).ready(function () {
                $("#myInput").on("keyup", function () {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function () {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>


                <thead>
                    <tr>
                        <th>#</th>
                        <th>Id</th>
                        <th>Nome</th>
						<th>Email</th>
                        <th>Data do Cadastro</th>
						<th>Action</th>
						<th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
            @foreach($admins as $admin)
    <?php

      $max = 24;
      $str = " $admin->name ";
      $resultName=  substr_replace($str, (strlen($str) > $max ? '...' : ''), $max);

      $max = 20;
      $str = " $admin->titulo ";
      $result2=  substr_replace($str, (strlen($str) > $max ? '...' : ''), $max);
 ?>

                        <td></td>
                        <td>{{$admin->id}}</td>
                        <td>{{$admin->name}}</td>
                        <td>{{$admin->email }}</td>
                        <td>{{$admin->created_at }}</td>
						<td><span class="status text-success">&bull;</span> Ativo</td>
						<td>

							<a  href="/admin/novoadmin/editar/{{ $admin->id }}"
                             class="view" title="View" data-toggle="tooltip"><i class="fas fa-eye"></i></a>

                            <a href="/admin/novoadmin/editar/{{ $admin->id }}"
                             class="edit"
                             title="Edit"
                             data-toggle="tooltip"><i class="fas fa-user-edit"></i></a>

                            <a href="/admin/novoadmin/apagar/{{ $admin->id }}"
                               onclick="return confirm('Deseja realmente excluir o cliente: {{$admin->name}}?');"
                            class="delete" title="Delete" data-toggle="tooltip"><i class="fas fa-times"></i></a>

                        </td>
                    </tr>
			@endforeach

                </tbody>
            </table>
			<div class="clearfix">
                <div class="hint-text">Exibindo
                    <b>{{ $admins->count() }}
                    </b> de <b>{{$admins->total()}}
                    </b> admins</div>
                     {{ $admins->links() }}

            </div>
        </div>
    </div>



    <!-- modal adicionar clientes  -->




<!-- line modal -->


<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">

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

  <div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>

		</div>
		<div class="modal-body">
              <div class="modal-title">

           <h1 style="color:#590670;">Cadastro de Admins</h1>
              </div>

            <!-- content goes here -->
          <form method="POST" action="/admin/novoadmin/criar" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="exampleInputEmail1"  name ="name" placeholder="Digite um Nome">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" class="form-control" id="exampleInputEmail1"  name ="email"placeholder="Digite um email">
              </div>


              <div class="form-group">
                <label for="exampleInputPassword1">Senha</label>
                <input type="password" class="form-control" name="password"  id="exampleInputPassword1" placeholder="Senha">
              </div>


         <div class="form-group">
                    <label for="password-confirm" class="col-form-label">Confirmar Senha</label>
                    <input type="password" class="form-control" id="password-confirm"
                    name="password_confirmation"  autocomplete="new-password"
                    placeholder = "confirmar  senha" >
                    <div class="password-confirm-feedback">
            </div>
        </div>

<!--
              <div class="form-group">

                <label for="exampleFormControlFile1">Exemplo de input de arquivo</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1"
                    name="image">

              </div> -->



            <!-- <div class="custom-file">
              <input type="file" class="custom-file-input" id="image" name="image">
              <label class="custom-file-label" for="image">Escolha uma imagem</label>
            </div> -->


              <div class="checkbox">
                <label>
                  <!-- <input type="checkbox"> Check me out -->
                </label>
              </div>
              <button type="submit" class="btn btn-warning">Cadastrar</button>
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
