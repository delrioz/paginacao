@section('index-content')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/app.css">
<link rel="stylesheet" href="estilo.css">

<!------ Include the above in your HEAD tag ---------->
@extends('layouts.sidebaradmin')

<!DOCTYPE html>

<head>

<style>
  body {
      color: #566787;
  background: #f5f5f5;
  font-family: 'Varela Round', sans-serif;
  font-size: 16px;
  }


#panelPrimary{
  background-color:orange;
}


#panelHeading{
  background-color:purple;
}

#h11{
    color: red;
}
</style>


</head>

<body>
<br><br>
<div class="container">

      <form method="POST" action="/admin/categorias/criar" enctype="multipart/form-data">
        @csrf


    <div class="form-group">
        <label for="name">Categoria</label>
        <input type="text" class="form-control"
         value=" {{ $sugestoes->categoria }}"
         id="exampleInputEmail1"  name ="name" placeholder="Digite a categoria">
      </div>





  <div class="form-group">
    <label for="exampleFormControlTextarea1">Motivo </label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"> {{ $sugestoes->motivo }}</textarea>
  </div>


    <div class="form-group">
    <label for="exampleFormControlTextarea1">Sobre </label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
     name ="sobre"></textarea>
  </div>






    <button type="submit" class="btn btn-warning">Cadastrar</button>
            </form>

</div>

</div>
</div>
</div>
</div>

</fieldset>
</form><!-- Button (Double) -->

@stop
<script>
    CKEDITOR.replace( 'obs' );
</script>
</body>
</html>
