
<!DOCTYPE html>
<html lang="en">
<head>
<title>Findeela - Todos Anúncios</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>


  <!--NAVBAR-->

  <link rel="stylesheet" href="css/app.css">
  <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="estilo.css">


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

  

<style>


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


#containerSearch{
  /* background-color: red; */
  color:border solid 20px blue;
}

  #h3jumbotron{

     text-align:center;

  }


  #jumbotron {

    background-color: #ffaa00;

  }



  li{
      style="font-style:Tahoma"; 
      font-size:15px;

}
   


</style>


  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4" id="jumbotron">
       <h3 id="h3jumbotron">Faça suas pesquisas por anúncios de maneira mais específica</h3>
       @if(isset($name))
       <h6>Pesquisando por : {{$name}} </h6>
       @endif

       <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145372974-1"></script>
       <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());

         gtag('config', 'UA-145372974-1');
       </script>

    </header>




              <div class="container" id="containerSearch">
              <div class="box-header">
            <form action="{{ route('anunciosvend-search') }}" method="POST" class="form form-inline">
              @csrf

              <input type="text" name="titulo" id="" class = "form-control" placeholder = "Título">
                    <div class="md md-12">
                    </div>
              <!-- <input type="text" name="sobre" id="" class = "form-control" placeholder = "Sobre"> -->

                <select name="categoria" id="" class = "form-control ml-2" >
                      <option value="" type="disabled">Categoria</option>


                  @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->name }}">{{ $categoria->name }}</option>

                  @endforeach


                </select>


                
                <select name="estadosanuncio" id="" class = "form-control ml-2" >
                      <option value="" type="disabled">Estado</option>


                  @foreach ($estadosanuncios as $estadosanuncio)
                        <option value="{{ $estadosanuncio->UF }}">{{ $estadosanuncio->UF }}</option>
                  @endforeach



                </select>

                  <div class="md md-12">
                    </div>

               <button type="submit" class="btn btn-primary ml-2" id=btnRoxo>Pesquisar</button>
            </form>
            <br>

              </div>
     </div>

  @if(count($anuncios)>0)





  <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
            @foreach($anuncios as $anuncio)
               <?php

                  $max = 24;
                  $str = " $anuncio->sobre ";
                  $result=  substr_replace($str, (strlen($str) > $max ? '...' : ''), $max);


                  $max = 20;
                  $str = " $anuncio->titulo ";
                  $result2=  substr_replace($str, (strlen($str) > $max ? '...' : ''), $max);

             ?>

                <div class="col-md-4">
                  <div class="card mb-4 shadow-xs">

                    <div class="card-body">
                      <h5 class="card-title"><strong>{{ $result2 }}</strong></h5><br>
                      <p class="card-text"><strong>{{ $result }}</p></strong>
                      <br>
                      <br>
                      <br>


                      <div class="d-flex justify-content-between align-items-center">
                          <!--button type="button" class="btn btn-sm btn-outline-secondary">Download</button-->
                           <div class="card-footer"
                            style="position:absolute !important; bottom:0 !important; width:80% !important; background-color: transparent !important;text-align: center !important;">
                            <a  href="/anuncios/{{ $anuncio->id }}"

                            class="btn btn-warning  btn-details">Mais Detalhes</a>
                        </div>
                          <form method="anuncio" action="/{{$anuncio->id}}">
                            @csrf

                          </form>
                      </div>
                    </div>
                  </div>
                </div>
            @endforeach
          </div>

               <div class="card-body">



                @if (isset($dataForm))
                   {!! $anuncios->appends($dataForm)->links() !!}

                @elseif(isset($a))
                    @elseif(isset($normal))
                   {!! $anuncios->links()  !!}
                    @else
                   {!! $anuncios->links()  !!}
                    @endif




               </div>
          </div>
        </div>
      </div>
    </main>




    @endif








@if(count($anuncios)==0)

    <div class="container">
        <div class="alert alert-danger" role="alert">
         Nenhum anuncio com essas características foi encontrado em nossa base de dados.
        </div>
    </div>

@endif




    </div>
    <!-- /.row -->

  </div>
  </div>
  <!-- /.container -->


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
