 <!--NAVBAR-->

 <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: #FFA500">


 <a href="/cliente"  style="font-size:20px;" color= "purple";><img src="{{ asset('findeela/Findeela BandW.png') }}"
     alt="Findeela.png" style="width:36px;height:50px;">Findeela</a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">

      <a class="nav-link" href="/cliente">Home <span class="sr-only">(current)</span></a>
    </li>

    <li class="nav-item active">
      <a class="nav-link" href="/Cpaineladministrador">Painel de Controle</a>
    </li>

    <li class="nav-item active">
      <a class="nav-link" href="/meu-perfilCliente"">Meus Dados</a>
    </li>



    <li class="nav-item active">
      <a class="nav-link" href="/sobre">Sobre Nós</a>
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







    <!-- <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            Logado <span class="caret"></span>
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
    </li> -->


  </ul>



<form  method="POST" action= "/clienteAnuncios/search" class="form-inline my-2 my-lg-0">
  @csrf
    <input class="form-control mr-sm-2" type="busca" placeholder="Digite o serviço o qual procura"
      aria-label="busca" size="70" name="text">
    <button class="btn btn-outline-warning my-2 my-sm-0" type="submit" id="btnRoxo">Pesquisar</button>
  </form>



<ul class="navbar-nav  ml-4">
    <!-- Authentication Links -->
    @guest
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
        @endif
    @else

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
    @endguest
</ul>
</div>

</nav>

<title>Findeela</title>


  <div class="container-fluid">

    @yield('index-clientedetalhes')


  </div>
