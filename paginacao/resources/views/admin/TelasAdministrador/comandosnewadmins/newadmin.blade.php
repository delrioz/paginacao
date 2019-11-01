



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
	<a href="" class="float-right btn btn-outline-warning mt-1">Logar</a>
	<h4 class="card-title mt-2">Cadastrar</h4>
</header>
<article class="card-body">


<form method="POST" action="/admin/novoadmin/criar">
        @csrf

	<div class="form-row">
		<div class="col form-group">
			<label>Nome </label>
		  	<input type="text" class="form-control" placeholder="Nome" name="name" required>
		</div> <!-- form-group end.// -->
</div>

	<div class="form-group">
		<label>Email</label>
		<input type="email" class="form-control" placeholder="e-mail" name="email" required>
		<small class="form-text text-muted"></small>
	</div> <!-- form-group end.// -->




	<div class="form-group">
		<label>Senha</label>
	    <input class="form-control" type="password" name="password" required>
	</div> <!-- form-group end.// -->

    <div class="form-group">
		<label>Confirmar Senha</label>
        <input id="password-confirm"
                    max_length="191"
                type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" required>


	</div> <!-- form-group end.// -->




    <div class="form-group">
        <button type="submit" class="btn btn-warning btn-block"> Logar  </button>
    </div> <!-- form-group// -->




</form>
</article> <!-- card-body end .// -->
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->


</div>
<!--container end.//-->



<br><br>
