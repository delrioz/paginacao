
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <title>Conex</title>
</head>

<style>

    #footer{
        color: white;

        background: purple;


    }

    #links{
        background: orange;
    }

    .card{
        border: 1px solid orange ;
    }

    #btn-search {
    background: rgb(87, 13, 119);
    color: #fff;
    border-color: purple;
}


</style>
<body>
 <!--NAVBAR-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: #FFA500">
    <a class="navbar-brand" href="#">Conex</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href=".././main/index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Sobre</a>
        </li>


        <li class="nav-item active">
          <a class="nav-link" href="../restrito">Área Restrita</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href=".././main/todosanuncios">Todos Anúncios</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href=".././main/temasanuncio.php">Listar Temas</a>
        </li>

      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="busca" placeholder="Digite o serviço o qual procura"
          aria-label="busca" size="70">
        <button class="btn btn-outline-warning my-2 my-sm-0"  id="btn-search" type="submit">Pesquisar</button>
      </form>
    </div>
  </nav><br><br><br>


    <h1 class="header center orange-text" style="text-align: center;">Meus dados Cadastrados</h1><br><br>


    <div class="container">
        <div class="row">


            <!-- campo1
            <div class="col md-6">

                <div class="col-md-10">
                    <label for="name" class="">Seu nome Completo</label>
                    <div class="md-form mb-0">
                        <input type="text" id="name" name="name" class="form-control"
                        value=" {{ Auth::user()->name  }} ">
                    </div>
                </div>
            </div>
        </div>-->


        <!-- /campo1 -->

        <!-- campo2 -->

        <!-- /campo2 -->



            <!-- /campo4 -->
        <br>




        <form action="">
        <!-- campo4 -->
        <div class="col">
            <label for="name" class="">E-mail</label>

            <div class="col-md-11.5" style="width:995px">
                <div class="md-form mb-0">
                    <i class="fas fa-envelope prefix"></i>
                    <input type="text" id="name" name="name" class="form-control" value="delrio31@Outlook.com.br">
                </div>
            </div><br>
        </div>
        <!-- /campo4 -->
        <!-- campo4 -->
        <div class="col">
            <label for="password" class="">Senha</label>

            <div class="col-md-11.5" style="width:995px">
                <div class="md-form mb-0">
                    <input type="password" id="password" name="password" class="form-control">
                </div>
            </div>
        </div>
        <!-- /campo4 -->

        <!-- campo4 -->

        <!-- /campo4 -->


        <!-- PRA IMAGEM  -->

        <!-- /IMAGEM AAAAA -->

        <br><br>
        <br><br>
        <!-- campo4 -->


            <!-- <div class="row">

                <div class="w-100"></div><br>
                <!-- campo3
                <div class="col">
                    <div class="col-md-10">
                        <label for="sexo" class="">Telefone Fixo</label>
                        <div class="md-form mb-0">
                            <input type="text" class="form-control " id="telefoneFixo" placeholder="Seu telefone Fixo"
                                value="31 25261824" required>
                        </div>
                    </div>
                </div>-->
                <!-- /campo3 -->


                <!-- campo4
                <div class="col">
                    <div class="col-md-10">
                        <label for="validationServer02">Telefone Celular</label>
                        <input type="text" class="form-control " id="telefoneCelular" placeholder="Seu celular"
                            value="31 984036848" required>
                        <div class="valid-feedback">
                            Válida
                        </div>
                    </div>
                </div>
                                    -->

                <!-- /campo3 -->

                <!-- campo4 -->

                <!-- /campo4 -->
            </div>
            <br>


            <!-- campo4
            <div class="col">
                <div class="col-md-11.5" style="width:995px">
                    <div class="md-form mb-0">
                        <label for="exampleInputFile" class="bmd-label-floating">Escolha uma Imagem</label>
                        <input type="file" class="form-control-file" id="exampleInputFile">
                        <small class="text-muted">Selecione uma imagem para seu portifólio</small>
                    </div>
                </div>









                <br>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Cidade</label>
                        <input type="text" class="form-control" id="inputCity" placeholder="Sua cidade"
                            value="Belo Horizonte">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">Estado</label>
                        <select id="inputState" class="form-control">
                            <option selected>Seu Estado...</option>
                            <option selected>MG</option>
                            <option>SP</option>
                            <option>RJ</option>
                            <option>RS</option>
                            <option>MT</option>

                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">CEP</label>
                        <input type="text" class="form-control" id="inputZip" placeholder="Digite seu CEP"
                            value="31170024">
                    </div>

-->


                <!-- /campo4 -->
                <br>


                </div>
                <br><br>
                <button type="submit" class="btn btn-warning">Cadastrar</button>
                 </form>
                <br>
                <br>
                <br>

            </div>
        </div>

    </div>
    </div>


    <!-- Footer -->
    <footer class="page-footer font-small blue pt-4" id="footer">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">

                    <!-- Content -->
                    <h5 class="text-uppercase">conexCon</h5>
                    <p>A startup que veio para facilitar a conexão entre prestadores de serviços
                        e seus clientes !</p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text-uppercase">Siga-nos</h5>

                    <ul class="list-unstyled id=links">
                        <li>
                            <a href="#!">Facebook</a>
                        </li>
                        <li>
                            <a href="#!">Twitter</a>
                        </li>
                        <li>
                            <a href="#!">LinkedIn</a>
                        </li>
                        <li>
                            <a href="#!">Instagram</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3 id=links">

                    <!-- Links -->
                    <h5 class="text-uppercase">Abas</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Home</a>
                        </li>
                        <li>
                            <a href="#!">Login</a>
                        </li>
                        <li>
                            <a href="#!">Cadastro</a>
                        </li>
                        <li>
                            <a href="#!">Feedbacks</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2019 Copyright:
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="./estilo.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>
