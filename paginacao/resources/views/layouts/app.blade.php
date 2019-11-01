


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="css/app.css">
  <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="estilo.css">






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


li{
     font-size:17px;
}


</style>

<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: #FFA500">
  <a href="/"><img src="{{ asset('findeela/Findeela BandW.png') }}"
   alt="Findeela.png" style="width:36px;height:50px;">Findeela</a>

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

    </div>
    <!-- <ul class="navbar-nav ml-auto"> -->
        <!-- Authentication Links -->
        <!-- @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}"
                  style="color:black;"
                >{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}"
                    style="color:black;"
                    >{{ __('Registrar-se') }}</a>
                </li>
            @endif -->
        <!-- @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
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
        @endguest -->
    <!-- </ul> -->
  </nav>


        <main class="py-4">
          <br><br>
            @yield('content')
        </main>
    </div>
</body>
</html>
