@extends('layouts.app')


 @section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/app.css">
  <link href="css/estilo.css" rel="stylesheet">
  <link rel="stylesheet" href="estilo.css">
</head>

<body>
<br>


<div class="container">
  <h2>Cadastro Anunciante...</h2>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Dados Pessoais</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Localização</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Finalizando...</a>
    </li>
  </ul>

    <form method="POST" action="{{ route('register') }}">
        @csrf
  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <h3>Dados Pessoais e de acesso</h3><br>

         <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text"

                    maxlength="191"

                    class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

                <div class="form-group row">
                    <label for="telefone" class="col-md-4 col-form-label text-md-right">{{ __('Telefone') }}</label>

                    <div class="col-md-6">
                        <input id="telefone" type="telefone"
                        maxlength="71"

                        class="form-control @error('telefone') is-invalid @enderror" name="telefone" value="{{ old('telefone') }}" required autocomplete="telefone">

                        @error('telefone')
                            <span class="invalid'-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>


                    <div class="form-group row">
                        <label for="idade" class="col-md-4 col-form-label text-md-right">{{ __('Idade') }}</label>

                        <div class="col-md-6">
                        <input id="idade" type="text"
                        maxlength="2"
                        class="form-control @error('idade') is-invalid @enderror" name="idade" value="{{ old('idade') }}" required autocomplete="idade">

                            @error('idade')
                                <span class="invalid'-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                <div class="form-group row">
                        <label for="sexo" class="col-md-4 col-form-label text-md-right">{{ __('Sexo') }}</label>

                        <div class="col-md-6">
                             <select class="form-control" id="exampleSelect1"  name="sexo" value="{{ old('sexo') }}">
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                                <option  value="Outro">Outro</option>
                            </select>

                            @error('sexo')
                                <span class="invalid'-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>



                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                maxlength="191"

                                 class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid'-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                     <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>


                     </div>




    <div id="menu1" class="container tab-pane fade"><br>
      <h3>Localização</h3>


        <div class="form-group row">
                        <label for="cep" class="col-md-4 col-form-label text-md-right">{{ __('Cep') }}</label>

                        <div class="col-md-6">
                            <input id="cep" type="cep"
                              maxlength="8"

                             class="form-control @error('cep') is-invalid @enderror" name="cep" value="{{ old('cep') }}" required autocomplete="cep">

                            @error('cep')
                                <span class="invalid'-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('Cpf') }}</label>

                        <div class="col-md-6">
                            <input id="cpf" type="cpf"
                                maxlength="11"
                             class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}" required autocomplete="cpf">

                            @error('cpf')
                                <span class="invalid'-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="cnpj" class="col-md-4 col-form-label text-md-right">{{ __('Cnpj') }}</label>

                        <div class="col-md-6">
                            <input id="cnpj" type="cnpj"
                              maxlength="11"

                             class="form-control @error('cnpj') is-invalid @enderror" name="cnpj" value="{{ old('cnpj') }}" required autocomplete="cnpj">

                            @error('cnpj')
                                <span class="invalid'-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                <div class="form-group row">
                        <label for="MEI" class="col-md-4 col-form-label text-md-right">{{ __('Possui MEI?') }}</label>

                        <div class="col-md-6">
                             <select class="form-control" id="exampleSelect1"  name="MEI" value="{{ old('MEI') }}">
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
                            </select>

                            @error('sexo')
                                <span class="invalid'-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="endereco" class="col-md-4 col-form-label text-md-right">{{ __('Endereço') }}</label>

                        <div class="col-md-6">
                            <input id="endereco" type="endereco"
                            maxlength="191"
                             class="form-control @error('endereco') is-invalid @enderror" name="endereco" value="{{ old('endereco') }}" required autocomplete="endereco">

                            @error('endereco')
                                <span class="invalid'-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="complemento" class="col-md-4 col-form-label text-md-right">{{ __('Complemento') }}</label>

                        <div class="col-md-6">
                            <input id="complemento" type="complemento"
                            maxlength="50"

                             class="form-control @error('complemento') is-invalid @enderror" name="complemento" value="{{ old('complemento') }}" required autocomplete="complemento">

                            @error('complemento')
                                <span class="invalid'-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>



    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Sobre você e informações adicionais</h3>

                <div class="alert alert-warning" role="alert">
                <strong>Após Logado, Lembre-se de adicionar uma foto ao seu perfil no painel do administrador !</strong>
                <p><strong>No painel do Administrador você poderá adicionar também diplomas e certificações do serviço prestado</strong></p>
                </div>

       <div class="form-group row">
      <label for="aboutMe" class="col-md-4 col-form-label text-md-right">{{ __('Sobre mim') }}</label>

    <div class="col-md-6">
        <textarea id="aboutMe" type="aboutMe"
        maxlength="191"

         class="form-control @error('aboutMe') is-invalid @enderror" name="aboutMe" value="{{ old('aboutMe') }}" required autocomplete="aboutMe" rows="7"></textarea>

            @error('aboutMe')
                <span class="invalid'-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        </div>
       <div class="form-group row">
      <label for="exp" class="col-md-4 col-form-label text-md-right">{{ __('Experiências') }}</label>

    <div class="col-md-6">
        <textarea id="exp" type="exp" class="form-control @error('exp') is-invalid @enderror" name="exp" value="{{ old('exp') }}"
            maxlength="170"
         required autocomplete="exp" rows="7"></textarea>

            @error('exp')
                <span class="invalid'-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>



        </div>


         <input  type="hidden" name="image" id="image" class="form-control" required
                placeholder="Sua image" value="default.png">

         <input  type="hidden" name="diplomaCertificado" id="diplomaCertificado" class="form-control" required
                placeholder="Sua diplomaCertificado" value="default.png">

                             <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-warning">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script>


      // verifica se o documento foi completamente carregado
      $(document).ready(function () {

          // disparado quando o usuário alterar o cep
          $("#cep").change(function () {

              var cep = $("#cep").val();

              $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/", function(dados) {

                if (!("erro" in dados)) {
                    $("#endereco").val(dados.logradouro); //endereco
                    $("#complemento").val(dados.bairro); //bairro
                    $("#municipio").val(dados.localidade); //cidade //estado
                    $("#UF").val(dados.uf); //estado
                  }
              });

          });

      });

    </script>


    </div>
</div>
@endsection
</body>
</html>
