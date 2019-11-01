
@section('index-content')

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

  <style>
  body {
  background: #f5f5f5;
  font-family: 'Varela Round', sans-serif;
  font-size: 16px;
  }
  </style>
<body>
<br>


<div class="container">
  <h2>Editando dados cadastrados...</h2>
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
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu3">Foto de Perfil e diplomas...</a>
    </li>
  </ul>

@extends('layouts.sidebaradmin')


<form action="/admin/acessarvendedores" method="GET"
        enctype="multipart/form-data">
   {!! csrf_field() !!}
     <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <h3>Dados Pessoais e de acesso</h3><br>

         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="disable" class="form-control @error('name') is-invalid @enderror" name="name"
                                 readonly="readonly"
                                  value="{{ $anunciantes->name }}"  autocomplete="name" autofocus >

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
                                <input id="telefone" type="telefone"  readonly="readonly"
                                value="{{ $anunciantes->telefone }}"
                                class="form-control @error('telefone') is-invalid @enderror" name="telefone" value="{{ old('telefone') }}"  autocomplete="telefone">

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
                            <input id="idade" type="idade"
                             value="{{ $anunciantes->idade }}"
                            class="form-control @error('idade') is-invalid @enderror" name="idade"
                            readonly="readonly"
                            value="{{ old('idade') }}"  autocomplete="idade">
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
                            <input id="idade" type="sexo" class="form-control @error('sexo') is-invalid @enderror" name="sexo"
                            readonly="readonly"  value="{{ $anunciantes->sexo }}"
                            value="ok"  autocomplete="sexo">
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
                                <input id="email" type="email" readonly="readonly"
                                 value="{{ $anunciantes->email }}"
                                 class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

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
                                <input id="text" readonly="readonly"
                                 value="{{ $anunciantes->password }}"
                                type="text" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        </div>







    <div id="menu1" class="container tab-pane fade"><br>
      <h3>Localização</h3>


        <div class="form-group row">
                        <label for="cep" class="col-md-4 col-form-label text-md-right">{{ __('Cep') }}</label>

                        <div class="col-md-6">
                            <input id="cep" type="cep"
                               readonly="readonly"

                            value="{{ $anunciantes->cep }}"
                            class="form-control @error('cep') is-invalid @enderror" name="cep" value="{{ old('cep') }}"  autocomplete="cep">

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
                            value="{{ $anunciantes->cpf }}"
                            readonly="readonly"
                            class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}"  autocomplete="cpf">

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
                                value="{{ $anunciantes->cnpj }}"

                            readonly="readonly"
                            class="form-control @error('cnpj') is-invalid @enderror" name="cnpj"
                             value="{{ auth()->user()->cnpj }}"  autocomplete="cnpj">

                            @error('cnpj')
                                <span class="invalid'-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                        <div class="form-group row">
                        <label for="MEI" class="col-md-4 col-form-label text-md-right">{{ __('MEI') }}</label>

                        <div class="col-md-6">
                            <input id="MEI" type="MEI"
                               readonly="readonly"

                            value="{{ $anunciantes->MEI }}"
                            class="form-control @error('MEI') is-invalid @enderror" name="MEI" value="{{ old('MEI') }}"  autocomplete="cep">

                            @error('MEI')
                                <span class="invalid'-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="endereco" class="col-md-4 col-form-label text-md-right">{{ __('Endereço') }}</label>

                        <div class="col-md-6">
                            <input id="endereco"
                            readonly="readonly"
                             value="{{ $anunciantes->endereco }}"
                            type="endereco" class="form-control @error('endereco') is-invalid @enderror" name="endereco" value="{{ old('endereco') }}"  autocomplete="endereco">

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
                            <input id="complemento"
                             readonly="readonly"
                             value="{{ $anunciantes->complemento }}"
                             type="complemento" class="form-control @error('complemento') is-invalid @enderror" name="complemento" value="{{ old('complemento') }}"  autocomplete="complemento">

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
        readonly="readonly"

        class="form-control @error('aboutMe') is-invalid @enderror" name="aboutMe"   autocomplete="aboutMe"
          value="{{ $anunciantes->aboutMe }}"  placeholder="{{ $anunciantes->aboutMe }}" rows="7"></textarea>

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
        <textarea id="exp" type="exp"
        readonly="readonly"
        placeholder="{{ $anunciantes->exp }}"
        class="form-control @error('exp') is-invalid @enderror" name="exp"
          value="{{ $anunciantes->exp }}"
         autocomplete="exp" rows="7"></textarea>

            @error('exp')
                <span class="invalid'-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        </div>

        </div>



    <div id="menu3" class="container tab-pane fade"><br>
      <h3>Foto de perfil & diplomas</h3>

                <div class="alert alert-warning" role="alert">
                <strong>Adicione uma foto de perfil para o seu portifólio</strong>
                <p><strong>Caso tenha algum diploma / certificado relacionado a categoria do serviço prestado, anexe-o em PDF</strong></p>
                </div>

       <div class="form-group row">
<div class="input-group mb-12">
            @if($anunciantes->image !=null)
            <img src="{{ url('storage/users/'.$anunciantes->image) }}"
             alt="{{$anunciantes->image}}"  class="img-thumbnail"  style="width: 200px" align="right"><br>
            @endif
     <br>


  <div class="input-group-prepend">
           <div class="md-3">
             
           </div>
  <br>

  <div class="custom-file">
    <input type="file" class="custom-file-input md-3" id="image"  name="image" value="image" aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="image">Escolha uma imagem de perfil</label>
  </div>
</div><br><br><br><br>
<br>
<br>
<br>
           </div>

</div>
<div class="input-group mb-3">
  <div class="custom-file">
    <input type="file" class="custom-file-input md-3" id="diplomaCertificado"  name="diplomaCertificado" value="diplomaCertificado" aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="diplomaCertificado">Anexe seu certificado</label>
  </div>
  <div class="input-group-append">
  </div>
</div>


                    <button type="submit" class="btn btn-warning">
                        {{ __('Voltar ao painel') }}
                    </button>

                            </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@stop

    </div>
</div>


</body>
</html>
