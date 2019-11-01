



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">



<div class="container">
<br>
<hr>


<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
	<a href="/admin/novoadmin" class="float-right btn btn-outline-warning mt-1">Voltar</a>
	<h4 class="card-title mt-2">Editar</h4>
</header>
<article class="card-body">


<form action="/admin/novoadmin/salvar/{{$clientes->id}}" method="POST"
        enctype="multipart/form-data">


  @csrf



	<div class="form-row">
		<div class="col form-group">
			<label>Nome </label>
		  	<input type="text" class="form-control"
			   value="{{$clientes->name}}"
			   placeholder="Nome" name="name" >
		</div> <!-- form-group end.// -->
</div>

	<div class="form-group">
		<label>Email</label>
		<input type="email" class="form-control"
			value="{{$clientes->email}}"

		 placeholder="e-mail" name="email" >
		<small class="form-text text-muted"></small>
	</div> <!-- form-group end.// -->




	<div class="form-group">
		<label>Senha</label>
	    <input class="form-control"
		type="password" name="password" >
	</div> <!-- form-group end.// -->

    <div class="form-group">
		<label>Confirmar Senha</label>
        <input id="password-confirm"
                    max_length="191"
                type="password" class="form-control" name="password_confirmation"  autocomplete="new-password" >


	</div> <!-- form-group end.// -->




    <div class="form-group">
        <button type="return" class="btn btn-warning btn-block"> Voltar  </button>
    </div> <!-- form-group// -->




</form>
</article> <!-- card-body end .// -->
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->


</div>
<!--container end.//-->



<br><br>
