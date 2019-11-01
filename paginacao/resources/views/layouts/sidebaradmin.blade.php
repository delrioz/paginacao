<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <title>Findeela</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset(('css/dashboard/vendor/bootstrap/css/bootstrap.min.css'))}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset(('css/dashboard/css/simple-sidebar.css'))}}" rel="stylesheet">



</head>

<style>

 #btnRoxo{
    background: rgb(87, 13, 119);
    color: #fff;
    border-color: purple;
}
 #menu-toggle{
    background: rgb(87, 13, 119);
    color: #fff;
    border-color: purple;
}

#btn-search{
   background: rgb(87, 13, 119);
    color: #fff;
    border-color: purple;
}

.nav-link{
  color:black;
}

#sidebar-wrapper{
      background-color: orange;
}

#titles{
  color: purple;;

}

#areadosadminsh5{
  color:color: #fff; ;
}

</style>
<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading" id="titles">
        <a href="#"><img src="{{ asset('findeela/Findeela BandW.png') }}"
         alt="Findeela.png" style="width:36px;height:50px;"
         text-align:center;></a> <h5 id="areadosadminsh5">Área dos Admins</h5>
       </div>


      <div class="list-group list-group-flush" id="ls">
        <a href="/admin" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="/admin/acessarclientes" class="list-group-item list-group-item-action bg-light">Clientes</a>
        <a href="/admin/acessarvendedores" class="list-group-item list-group-item-action bg-light">Anunciantes</a>
        <a href="/admin/navegando" class="list-group-item list-group-item-action bg-light">Anúncios</a>
        <a href="/admin/acessartemassugeridos" class="list-group-item list-group-item-action bg-light">Sugestões</a>
        <a href="/anuntop" class="list-group-item list-group-item-action bg-light">Anunciantes no Topo</a>
        <a href="/anuntopOrderbyAnunciantes" class="list-group-item list-group-item-action bg-light">Anunciantes Order</a>
        <a href="/oqusuariosprocuram" class="list-group-item list-group-item-action bg-light">Relatórios dos usuários</a>
        <a href="/admin/categorias" class="list-group-item list-group-item-action bg-light">Categorias</a>
        <a href="/admin/reports" class="list-group-item list-group-item-action bg-light">Reportes</a>
        <a href="/qtMei" class="list-group-item list-group-item-action bg-light">Nº Mei</a>
        <a href="/Ngerais" class="list-group-item list-group-item-action bg-light">Nº Gerais</a>
        <a href="/Pregiao" class="list-group-item list-group-item-action bg-light">Por Região</a>
        <a href="/admin" class="list-group-item list-group-item-action bg-light">Voltar</a>
        <a href="/admin/logout" class="list-group-item list-group-item-action bg-light">Logout</a>
      </div>
    </div>



    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

 <nav class="navbar navbar-expand-lg  border-bottom" style="background: #FFA500">
        <button class="btn btn-primary" id="menu-toggle">Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>




        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="../homeAdmin">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Opções
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/admin/logout">Logout</a>
                <!-- <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a> -->
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
      <!-- conteudos -->

            @yield('index-content')



      <!-- fim dos conteudos-->
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
