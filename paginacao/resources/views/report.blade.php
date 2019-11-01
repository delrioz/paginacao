


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/app.css">
  <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="estilo.css">


  <link href="{{ asset('css/estilobotoes.css') }}" rel="stylesheet">



<style media="screen">

  #conteudo{
    color: #000000;
    font-size:  23px;
    font-style: normal;
  }

  #jumbotron {

    background-color: #ffaa00;

  }


  footer {
    margin-top: 100px;
    background-color: #844b96;
    color: white;
}

a {
    color: black;
}




.card-title{
  text-align: center;
}

body {
    background-color: #F9F9F9;
  }

 #btnRoxo{
    background: rgb(87, 13, 119);
    color: #fff;
    border-color: purple;
}

#logoConex{
  color: #6c1380;
  font-style: 10px;
}



</style>

<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: #FFA500">
  <a href="/"><img src="{{ asset('findeela/Findeela BandW.png') }}"
   alt="Findeela.png" style="width:36px;height:50px;"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>


        <li class="nav-item active">
          <a class="nav-link"  href="/sobre"
          >Sobre Nós</a>
        </li>

        <!-- <li class="nav-item active">
          <a class="nav-link" href="../restrito">Área Restrita</a>
        </li> -->






        <li class="nav-item active">
          <a class="nav-link"
          data-toggle="modal" data-target="#modalLogin">Logar</a>
        </li>




      </ul>
        <form  method="POST" action= "/clienteAnuncios/search" class="form-inline my-2 my-lg-0">
      @csrf

        <button class="btn btn-outline-warning my-2 my-sm-0"
        class="btn btn-warning" id="btnRoxo" type="button"
        data-toggle="modal" data-target="#modalLogin"

         type="button" id="btnRoxo">Navegar</button>
      </form>
    </div>
  </nav>


      <br>
      <br>
      <br>
      <br>
<br>

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
     <div class="alert alert-info">
          <h5>Olá! Queremos te ouvir, diga qual problema está acontecendo </p><p> ou mande um e-mail para findeela@gmail.com</h5>
     </div>

      <form method="POST" action="/report-enviar" enctype="multipart/form-data">
        @csrf


    <div class="form-group">
        <label for="name">Título da reclamação Reclamação</label>
        <input type="text" class="form-control"
         id="exampleInputEmail1"  name ="title" placeholder="O que está acontecendo?" required>
      </div>


  <div class="form-group">
    <label for="exampleFormControlTextarea1">Fale mais sobre : </label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="moreAbout"> </textarea>
  </div>

<input type="hidden" name="emailDeQmAnuncia"  value="{{ Auth::user()->email }}"> 

<button type="submit" class="btn btn-warning">Reportar</button>
            </form>
</div>

</div>
</div>
</div>
</div>

</fieldset>
</form><!-- Button (Double) -->

<script>
    CKEDITOR.replace( 'obs' );
</script>
</body>
</html>
