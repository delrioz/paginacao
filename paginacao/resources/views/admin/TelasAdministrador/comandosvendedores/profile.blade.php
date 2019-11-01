@section('index-content')

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>


    <link href="{{asset(('css/mdb/css/bootstrap.min.css'))}}" rel="stylesheet">

<link rel="stylesheet" href="css/app.css">
<link rel="stylesheet" href="estilo.css">

      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">


  @extends('layouts.sidebaradmin')

<style type="text/css">

    body {
    background: #f5f5f5;
    font-family: 'Varela Round', sans-serif;
    font-size: 16px;
    }

	.table-wrapper {
        background: #fff;
        padding: 20px 25px;
        margin: 30px 0;
		border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-title {
		padding-bottom: 15px;
		background: #590670;
		color: #fff;
		padding: 16px 30px;
		margin: -20px -25px 10px;
		border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
		margin: 5px 0 0;
		font-size: 24px;
	}
	.table-title .btn {
		color: #566787;
		float: right;
		font-size: 13px;
		background: #fff;
		border: none;
		min-width: 50px;
		border-radius: 2px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}
	.table-title .btn:hover, .table-title .btn:focus {
        color: #566787;
		background: #f2f2f2;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
    }
	table.table tr th:first-child {
		width: 60px;
	}
	table.table tr th:last-child {
		width: 100px;
	}
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table td:last-child i {
		opacity: 0.9;
		font-size: 22px;
        margin: 0 5px;
    }
	table.table td a {
		font-weight: bold;
		color: #566787;
		display: inline-block;
		text-decoration: none;
	}
	table.table td a:hover {
		color: #2196F3;
	}
	table.table td a.settings {
        color: #2196F3;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table .avatar {
		border-radius: 50%;
		vertical-align: middle;
		margin-right: 10px;
	}
	.status {
		font-size: 30px;
		margin: 2px 2px 0 0;
		display: inline-block;
		vertical-align: middle;
		line-height: 10px;
	}
    .text-success {
        color: #10c469;
    }
    .text-info {
        color: #62c9e8;
    }
    .text-warning {
        color: #FFC107;
    }
    .text-danger {
        color: #ff5b5b;
    }
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }
    .pagination li a:hover {
        color: #666;
    }
    .pagination li.active a, .pagination li.active a.page-link {
        background: #03A9F4;
    }
    .pagination li.active a:hover {
        background: #0397d6;
    }
	.pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;

    }


</style>


<body>

<br>


  @if($errors->any())
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




  <form action = "/admin/acessaranunciantesviaadmin/salvar/{{$anunciantes->id}}" method="POST" id="editar" name="editar"
         enctype="multipart/form-data">
   {!! csrf_field() !!}


  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <h3>Dados Pessoais e de acesso</h3><br>
   <div class="form-group row">

      <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

      <div class="col-md-6">
          <input id="name" type="disable" class="form-control @error('name') is-invalid @enderror" name="name"  maxlength="191"

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
                    <input id="telefone" type="telefone"
                    value="{{ $anunciantes->telefone }}"
                    class="form-control @error('telefone') is-invalid @enderror" name="telefone" value="{{ old('telefone') }}"  autocomplete="telefone" pattern="{6,71}" maxlength="71">

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
                            class="form-control @error('idade') is-invalid @enderror" name="idade"  maxlength="2"
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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

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
                            value="{{ $anunciantes->cep }}"
                            class="form-control @error('cep') is-invalid @enderror" name="cep" value="{{ old('cep') }}"  autocomplete="cep" maxlength="8">

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
                            value="{{ $anunciantes->cpf }}"
                            class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}"  autocomplete="cpf" maxlength="8">

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
                        <label for="MEI" class="col-md-4 col-form-label text-md-right">{{ __('Possui MEI?') }}</label>

                        <div class="col-md-6">
                             <select class="form-control" id="exampleSelect1"  name="MEI" value="{{ old('MEI') }}">
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
                            </select>

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
                            value="{{ $anunciantes->endereco }}"
                            type="endereco"  maxlength="191"

                             class="form-control @error('endereco') is-invalid @enderror" name="endereco" value="{{ old('endereco') }}"  autocomplete="endereco">

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
                            value="{{ $anunciantes->complemento }}"
                             type="complemento"  maxlength="50"
                             class="form-control @error('complemento') is-invalid @enderror" name="complemento" value="{{ old('complemento') }}"  autocomplete="complemento"
                             maxlength="11">

                            @error('complemento')
                                <span class="invalid'-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>



    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Sobre você e informações adicionais</h3><br>
<!--
                <div class="alert alert-warning" role="alert">
                <strong>Após Logado, Lembre-se de adicionar uma foto ao seu perfil no painel do administrador !</strong>
                <p><strong>No painel do Administrador você poderá adicionar também diplomas e certificações do serviço prestado</strong></p>
                </div> -->


       <div class="form-group row">
      <label for="aboutMe" class="col-md-4 col-form-label text-md-right">{{ __('Sobre mim') }}</label>

    <div class="col-md-6">
        <textarea id="aboutMe" type="aboutMe"
        class="form-control @error('aboutMe')
        is-invalid @enderror" name="aboutMe"   maxlength="191"
         autocomplete="aboutMe"
         value="{{ $anunciantes->aboutMe }}" rows="7">{{ $anunciantes->aboutMe }}</textarea>

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
        value="{{ $anunciantes->exp }}"
        class="form-control @error('exp') is-invalid @enderror" name="exp"  maxlength="170"
            value="{{ $anunciantes->exp }}"
         autocomplete="exp" rows="7">{{$anunciantes->exp}}</textarea>

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

              <div class="container">

                <div class="alert alert-warning" role="alert">
                <strong>Adicione uma foto de perfil para o seu portifólio</strong>
                <p><strong>Caso tenha algum diploma / certificado relacionado a categoria do serviço prestado, anexe-o em PDF</strong></p>
                </div>

        <div class="row">

        <div class="col-md-6">

           <div class="card-title" style="float-right:60px; ">Imagem
           </div>

           <div class="container" style="float-right:40px;">


            <div class="container mr-12">
                 <div class="form-group row">
                  <div class="input-group mb-12">
               @if($anunciantes->image !=null)
                    <img src="{{ url('storage/users/'.$anunciantes->image) }}"
                     alt="{{ $anunciantes->name }}" class="img-thumbnail" style= "max-width: 320px; max-height:  320px;"> <br><br>
             @endif

           </div>
           <div class="card-footer2">
             <div class="custom-file">
               <input type="file" class="custom-file-input md-3" id="image"  name="image" value="image" aria-describedby="inputGroupFileAddon01">
               <label class="custom-file-label" for="image">Escolha uma imagem de perfil</label>
             </div><br>
           </div>

             <br>
           </div>
         </div>
        </div>
        </div>





        <div class="col-md-6">

           <div class="card-title" style="float-right:60px; ">PDF
           </div>

           <div class="container" style="float-right:40px;">


             <div class="container mr-12">
              <div class="form-group row">
               <div class="input-group mb-12">

               <img src="{{asset(('imgs/pdf.png'))}}"
                alt="{{ auth()->user()->name }}" style= "max-width:
                300px; max-height:  300px; none;" class="img-thumbnail"><br><br><br><br>

            </div>



           <div class="card-footer2">
             <div class="custom-file">
               <input type="file" class="custom-file-input md-1" id="diplomaCertificado"
                name="diplomaCertificado" value="diplomaCertificado" aria-describedby="inputGroupFileAddon01">
               <label class="custom-file-label" for="diplomaCertificado">Anexe seu certificado</label>
           </div><br>

              <?php
                       $file_name  =   $anunciantes->diplomaCertificado
              ?>

             @if($anunciantes->image !='default.png')

                        <a type="button" class="btn btn-sm btn-outline-secondary"
                         href="/downloadPDF/{{$file_name}}" id="btnRoxo">Download</a>
             @endif



           </div>

             <br>
           </div>
         </div>
        </div>




                 </div>

        </div>
        <!-- <div class="input-group mb-3">
          <div class="custom-file">
            <input type="file" class="custom-file-input md-3" id="diplomaCertificado"  name="diplomaCertificado" value="diplomaCertificado" aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="diplomaCertificado">Anexe seu certificado</label>
          </div> -->


                    <div class="form-group">

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-12">
                            <button type="submit" class="btn btn-warning">
                                {{ __('Atualizar Perfil') }}
                            </button>
                          </div>
                                    </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


    <script>


        // verifica se o documento foi completamente carregado
        $(document).ready(function () {


            $("#cep").mask("99.999-999");
            $("#telefone").mask("(99) 9 9999-9999");
            $("#cpf").mask("999.999.999-99");
            $("#cnpj").mask("99.999.999/9999-99");

            
            $("#editar").submit(function(){
                $("#cep").unmask();
                $("#telefone").unmask();
                $("#cpf").unmask();
                $("#cnpj").unmask();

            });

            

            // disparado quando o usuário alterar o cep
            $("#cep").change(function () {

                var cep = $(this).val().replace(/\D/g, '');
                var telefone = $(this).val().replace(/\D/g, '');
                var cpf = $(this).val().replace(/\D/g, '');
                var cnpj = $(this).val().replace(/\D/g, '');

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
            @stop
        </div>
        </body>
        </html>
