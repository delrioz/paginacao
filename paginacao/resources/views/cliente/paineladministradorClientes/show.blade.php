<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


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



<div class="card border">
 <div class="card-body">
  <form action="/meuservicos/{{$mservicos->id}}" method="POST">
   @csrf
    @method('Put')



    <h1 class="header center orange-text" style="text-align: center;">Editando Anúncio...</h1><br><br>


    <div class="container">
        <div class="row">


        </div>

        <div class="row">

            <div class="w-100"></div><br>
            <!-- campo3 -->
            <div class="col">
                <div class="col-md-10">
                    <label for="titulo" class="">Título</label>
                    <div class="md-form mb-0">
                        <input type="text" class="form-control" name="titulo" id="titulo"
                          placeholder="Título do Anúncio"
                           value="{{$mservicos->titulo}}" required>
                    </div>
                </div>
            </div>
            <!-- /campo3 -->


            <!-- campo4 -->
            <div class="col">
                <div class="col-md-10">
                    <label for="UF" name="UF" >UF</label>
                    <select id="UF"  name="UF" class="form-control">
                        <option selected>"{{ $mservicos->UF }}"</option>
                        <option selected>MG</option>
                        <option>SP</option>
                        <option>RJ</option>
                        <option>RS</option>
                        <option>MT</option>

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
                         placeholder="Seu endereço"
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
                        required>
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
                        name="municipio" placeholder="Seu Município"
                            value="{{ $mservicos->municipio }}" required>
                    </div>
                </div>
            </div>
            <!-- /campo3 -->


            <!-- campo4 -->
            <div class="col">
                <div class="col-md-10">
                    <label for="cep">CEP</label>
                    <input type="text" class="form-control " id="cep"
                    <input type="text" class="form-control " id="cep"
                     name="cep" placeholder="Digite o CEP" value="{{ $mservicos->cep }}"
                        required>
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

            <div class="col">
                <div class="col-md-10">
                    <label for="categoria" name="categoria">Categoria</label>
                    <select id="categoria" name="categoria" class="form-control">
                        <option selected>{{ $mservicos->categoria }}</option>
                        <option>Serviços Gerais</option>
                        <option selected>Educacional</option>
                        <option>Alimentícios</option>
                        <option>Transportes</option>
                        <option>Profissionais da Saúde</option>

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
        <div class="col">
            <div class="col-md-11.5" style="width:995px">
                <div class="md-form mb-0">
                    <label for="exampleInputFile" class="bmd-label-floating">Escolha uma Imagem</label>
                    <input type="file" class="form-control-file" id="exampleInputFile">
                    <small class="text-muted">Selecione uma imagem para seu portifólio</small>
                </div>
            </div>


            <br>

            <br>

            <!-- campo4 -->
            <div class="col">
                <label for="name" class="">Sobre</label>

                <div class="col-md-11.5" style="width:995px">
                    <div class="md-form mb-0">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Sou professor de inglês e tenho meu escritório  no centro da cidade, mas também atendo à domicílios"
                           name="sobre" value="{{ $mservicos->sobre }}"
                            placeholder="sobre" id="sobre"></textarea>

                    </div>
                </div><br>





                <!-- /campo4 -->
                <br>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="defaultInline1">
                    <label class="custom-control-label" for="defaultInline1">Li e concordo com os termos de uso.</label>

                </div>
                <br><br>
                <button type="submit" class="btn btn-warning">Cadastrar</button>

            </div>
        </div>

    </div>
    </div>
