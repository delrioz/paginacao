

<!DOCTYPE html>
<html lang="en">
<head>
<title>Editando Profile</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>



    <br><br><br>





  <!--NAVBAR-->
  <!--NAVBAR-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: #FFA500">

    <a href="/anuncios"  style="font-size:20px; color:black!important;" color= "purple";><img src="{{ asset('findeela/Findeela BandW.png') }}"
     alt="Findeela.png" style="width:36px;height:50px;color:black;">Findeela</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">

          <a class="nav-link" href="/painelvendedor" style="margin-left: 6px;">Home <span class="sr-only">(current)</span></a>
        </li>
        

        <!-- <li class="nav-item active">
          <a class="nav-link" href="/todosanunciosvend">Todos Anúncios</a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="/listarcategorias">Listar Categorias</a>
        </li> -->

        <!-- <li class="nav-item active">
          <a class="nav-link" href="../restrito">Área Restrita</a>
        </li> -->


        <!-- <li class="nav-item active">
          <a class="nav-link" href="/paineladministrador">Painel Administrador</a>
        </li> -->
        
        <li class="nav-item active">
          <a class="nav-link" href="/anuncios">Todos Anúncios</a>
        </li>



        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/meu-perfil') }}">Meus Dados </a>
        </li>


        <li class="nav-item active">
          <a class="nav-link" href="/sobre">Sobre Nós</a>
        </li>


      </ul>



   <form  method="POST" action= "/VendedorAnuncios/search" class="form-inline my-2 my-lg-0">
      @csrf
        <input class="form-control mr-sm-2" type="busca" placeholder="Digite o serviço o qual procura"
          aria-label="busca" size="70" name="text">
        <button class="btn btn-outline-warning my-2 my-sm-0" type="submit" id="btnRoxo">Pesquisar</button>
      </form>


    <ul class="navbar-nav mr-2">

    <li class="nav-item dropdown" id="liLogado">
       <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
           {{auth()->user()->name}} <span class="caret"></span>
       </a>

       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
           <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
               {{ __('Logout') }}
           </a>



           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               @csrf
           </form>
       </div>
   </li>
</ul>

</div>


  </nav>

    
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

<style>
img {width:100%;}

 #btnRoxo{
    background: rgb(87, 13, 119) !important;
    color: #fff !important;
    border-color: purple !important;
}

</style>


<div class="container">
     <div class="alert alert-info">
          <h5>Olá! Queremos te ouvir, diga qual problema está acontecendo </p><p> ou mande um e-mail para findeela@gmail.com</h5>
     </div>

      <form method="POST" action="/reportanunc-enviar" enctype="multipart/form-data">
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

<input type="hidden" name="emailDeQmAnuncia"  value=" {{ Auth::user()->email }}">

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
