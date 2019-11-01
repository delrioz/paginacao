
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">

    <!-- Latest compiled and minified CSS -->

    <link rel="stylesheet" href="css/app.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    <style>
        .form-control {
            border: none;
            /*Retira as bordas do input*/
            border-bottom: solid 1px #ffffff;
            /*Coloca borda somente na parte de baixo*/
            border-bottom: 1px solid orange;
            /* coloca a borda em baixo */
        }


        #lastName {
            border: orange;
            float: left;
        }

        footer {
            margin-top: 100px;
            color: black;
            background: orange;

        }

        a {
            color: black;
        }

        .list-group-item {
            background-color: orange;
        }

        #ativos {
            background-color: purple;
        }

        .card-header {

            background-color: rgb(249, 249, 249);
        }

        .btn {
            background: rgb(87, 13, 119);
            color: #fff;
            border-color: purple;
        }

        .btn:hover {
            background: white;
            color: purple;
        }

        a {
            color: black;
        }

        #avaliacoes {

            background-color: #FFA500;
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





 <!--NAVBAR-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: #FFA500">

    <a href="/anuncios"><img src="{{ asset('findeela/Findeela BandW.png') }}"
     alt="Findeela.png" style="width:36px;height:50px;"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/anuncios">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Sobre</a>
        </li>



        <li class="nav-item active">
          <a class="nav-link" href="/todosanunciosvend">Todos Anúncios</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/listarcategorias">Listar Temas</a>
        </li>

      </ul>
           <form  method="POST" action= "/VendedorAnuncios/search" class="form-inline my-2 my-lg-0">
      @csrf
        <input class="form-control mr-sm-2" type="busca" placeholder="Digite o serviço o qual procura"
          aria-label="busca" size="70" name="text">
        <button class="btn btn-outline-warning my-2 my-sm-0" type="submit" id="btnRoxo">Pesquisar</button>
      </form>
    </div>
  </nav>

  <br><br><br>


@if($errors->any())
<br><br><br>

     @foreach($errors->all() as $error)
        <div class="alert alert-danger">

      {{ $error }}
        </div>

      @endforeach

 @elseif(session()->has('success'))
         <div class="alert alert-success">

       {{ session('success') }}
 @endif
        </div>


</head>
<div class="card border">
 <div class="card-body">
  <form action="/meuservicos/{{$mservicos->id}}"  method="POST" enctype="multipart/form-data">
   {!! csrf_field() !!}



    <h1 class="header center orange-text" style="text-align: center;">Editando Anúncio...</h1><br><br>


    <div class="container">
          <div class="row">

            <div class="w-100"></div><br>
            <!-- campo3 -->
            <div class="col">
                <div class="col-md-11">
                    <label for="titulo" class="">Título</label>
                    <div class="md-form mb-0">

                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                placeholder="Digite um título para sua postagem"
                name="titulo"  maxlength="130"  value="{{$mservicos->titulo}}" required
                placeholder="titulo" id="titulo">{{$mservicos->titulo}}</textarea>


                    </div>
                </div>
            </div>




            <!-- /campo3 -->


        </div>
        <br>


        <div class="row">

            <div class="w-100"></div><br>
            <!-- campo3 -->
            <div class="col">
                <div class="col-md-10">
                    <label for="endereco" class="">Endereço</label>
                    <div class="md-form mb-0">
                        <input type="text" class="form-control " id="endereco" name="endereco"
                         placeholder="Seu endereço" maxlength="191"
                        value="{{ $mservicos->endereco }}" required>
                    </div>
                </div>
            </div>
            <!-- /campo3 -->


            <!-- campo4 -->
            <div class="col">
                <div class="col-md-10">
                    <label for="complemento">Complemento</label>
                    <input type="text" class="form-control " id="complemento" placeholder="complemento"
                     name="complemento" value="{{ $mservicos->complemento }}"
                     maxlength="50"   required>
                    <div class="valid-feedback">
                        Válida
                    </div>
                </div>
                <!-- /campo4 -->
            </div>
            <!-- /campo3 -->

            <!-- campo4 -->

            <!-- /campo4 -->
        </div>
        <br>

        <div class="row">

            <div class="w-100"></div><br>
            <!-- campo3 -->
            <div class="col">
                <div class="col-md-10">
                    <label for="municipio" class="">Município</label>
                    <div class="md-form mb-0">
                        <input type="text" class="form-control " id="municipio"
                        name="municipio" placeholder="Seu Município" maxlength="125"
                            value="{{ $mservicos->municipio }}" required>
                    </div>
                </div>
            </div>
            <!-- /campo3 -->


            <!-- campo4 -->
            <div class="col">
                <div class="col-md-10">
                    <label for="cep">CEP</label>
                    <input type="number" class="form-control " id="cep"
                    <input type="number" class="form-control " id="cep"
                     name="cep" placeholder="Digite o CEP" value="{{ $mservicos->cep }}"
                       maxlength="8" required>
                    <div class="valid-feedback">
                        Válida

                    </div>
                </div>
            </div>
            <!-- /campo3 -->

            <!-- campo4 -->

            <!-- /campo4 -->
        </div>



 <div class="row">

            <div class="w-100"></div><br>
            <!-- campo3 -->
            <div class="col">
                <div class="col-md-10">
                    <label for="mei" class="">MEI</label>
                    <div class="md-form mb-0">
                 <select id="mei"  name="mei" class="form-control" readonly="readonly">
                        <option selected>{{ $mservicos->mei }}</option>


                    </select>
                    </div>
                </div>
            </div>






             <input type="hidden" id="users_id" name="users_id" value="{{ Auth::user()->id  }} ">


            <!-- /campo3 -->


            <!-- campo4 -->
            <div class="col">
                <div class="col-md-10">
                    <label for="UF" name="UF" >UF</label>
                    <select id="UF"  name="UF" class="form-control">
                <option selected readonly="readonly">{{ $mservicos->UF }}</option>
                    </select>
                    <div class="valid-feedback">
                        Válida
                    </div>
                </div>
                <!-- /campo4 -->
            </div>
            <!-- /campo3 -->

            <!-- campo4 -->

            <!-- /campo4 -->
            <!-- /campo3 -->

            <!-- campo4 -->

            <!-- /campo4 -->
        </div>


        <br>

      <div class="row">

            <div class="col">
                <div class="col-md-10">
                    <label for="categoria" name="categoria">Categoria</label>
                    <select id="categoria" name="categoria" class="form-control">
                        <option selected>{{ $mservicos->categoria }}</option>
                        @foreach($categoria as $categorias)
                        <option>{{ $categorias->name }}</option>
                       @endforeach

                    </select>
                    <div class="valid-feedback">
                        Válida
                    </div>
                </div>
                <!-- /campo4 -->
            </div>
            <!-- /campo3 -->

            <!-- campo4 -->

            <!-- /campo4 -->

            <br>


            <!-- campo4 -->
            <div class="col">
                <div class="col-md-10">
                    <label for="validationServer02">Bairro</label>
                    <input type="text" class="form-control " id="bairro"
                    name="bairro"   value="{{ $mservicos->bairro }}" placeholder="Seu Bairro" required
                        value="Cidade Nova">
                    <div class="valid-feedback">
                        Válida
                    </div>
                </div>
                <!-- /campo4 -->
            </div>
            <!-- /campo3 -->

            <!-- campo4 -->

            <!-- /campo4 -->
        </div>
        <br>
        <br>

        <!-- campo4 -->
            <div class="form-group">
            <h3>Imagem atual</h3>
     @if($mservicos->image !=null)
            <img src="/storage/{{$mservicos->image}}""
             alt="{{ $mservicos->image}}" style= "max-width: 170px;">
     @endif
<br><br>

            <label for="exampleFormControlFile1">Exemplo de input de arquivo</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1"
                name="image">
            </div>




            <br>

            <br>

            <!-- campo4 -->
            <div class="col">
                <label for="name" class="">Sobre</label>

                <div class="col-md-11.5" style="width:995px">
                    <div class="md-form mb-0">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                            placeholder=""
                           name="sobre" value="{{ $mservicos->sobre }}"
                           maxlength="320"
                            placeholder="sobre" id="sobre">{{ $mservicos->sobre }}</textarea>

                    </div>
                </div><br>
                <!-- /campo4 -->
             <!--    <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="defaultInline1">
                    <label class="custom-control-label" for="defaultInline1">Li e concordo com os termos de uso.</label>

                </div> -->
                <button type="submit" class="btn btn-warning">Editar</button>

            </div>
        </div>

    </div>
    </div>
  </body>
  </html>


  <script>


    $("#cep").mask("99.999-999");
        $("#telefone").mask("(99) 9 9999-9999");
        $("#cpf").mask("999.999.999-99");
        $("#cnpj").mask("999.999.999-99");

        
        $("#registro").submit(function(){
            $("#cep").unmask();
            $("#telefone").unmask();
            $("#cpf").unmask();
            $("#cnpj").unmask();

        });

      // verifica se o documento foi completamente carregado
      $(document).ready(function () {

          // disparado quando o usuário alterar o cep
          $("#cep").change(function () {

              var cep = $("#cep").val();

              $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/", function(dados) {

                  if (!("erro" in dados)) {
                      $("#endereco").val(dados.logradouro); //endereco
                      $("#bairro").val(dados.bairro); //bairro
                      $("#municipio").val(dados.localidade); //cidade //estado
                      $("#uf").val(dados.uf); //estado
                  }
              });

          });

      });

  </script>
