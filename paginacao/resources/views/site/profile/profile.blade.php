

<!DOCTYPE html>
<html lang="en">
<head>
<title>Editando Profile</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>



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



  <!--NAVBAR-->
  <!--NAVBAR-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: #FFA500">

    <a href="/anuncios"  style="font-size:20px; color:black;" color= "purple";><img src="{{ asset('findeela/Findeela BandW.png') }}"
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


  <!-- @if($errors->any())
     @foreach($errors->all() as $error)
        <div class="alert alert-danger">

        {{ $error }}
        </div>

        @endforeach

 @elseif(session()->has('success'))
         <div class="alert alert-success">

       {{ session('success') }}
 @endif
        </div> -->





<style>
img {width:100%;}

 #btnRoxo{
    background: rgb(87, 13, 119) !important;
    color: #fff !important;
    border-color: purple !important;
}

</style>


<!------ Include the above in your HEAD tag ---------->

<form action = "{{ route('profile.update') }}" method="POST" id="editar" name="editar" enctype="multipart/form-data">
{!! csrf_field() !!}

<section class="testimonial py-5" id="testimonial">
    <div class="container"  style="box-shadow: 0 4px 12px 0 rgba(0, 0, 2, 0.2), 0 7px 20px 0 rgba(0, 0, 0, 0.19)">
        <div class="row ">
            <div class="col-md-4 py-5 bg-primary text-white text-center "
             id="btnRoxo">
                <div class=" ">
                    <div class="card-body">
                        <img src="{{ asset('findeela/Findeela BandW.png') }}" style="width:30%">
                        <h2 class="py-3">Editando  dados cadastrados...</h2>
                        <p> Neste momento, você está editando sua conta e seu portifólio os quais os seus futuros clientes irão poder ter acesso. <br>
                        <p>Não esqueça de adicionar uma boa foto, e, caso queira um arquivo PDF com mais informações !</p>

</p>
<BR>


<br>
<br><br>

  <!-- campo4 -->
  <div class="form-group">
            <h3>Imagem atual</h3>
    @if(auth()->user()->image !=null)
    <img src="{{ url('storage/users/'.auth()->user()->image) }}"
    alt="{{ auth()->user()->name }}" style= "max-width: 170px;">
     @endif
<br><br>

      <br>
</div>
<div class="card-footer2">
 <div class="custom-file">
   <input type="file" class="custom-file-input md-3" id="image"  name="image" value="image" aria-describedby="inputGroupFileAddon01">
   <label class="custom-file-label" for="image">Escolha uma imagem de perfil</label>
 </div><br>
</div>
<br>
<br>
<br>
<br>
<div class="alert alert-warning">
    <h5>Anexe PDF'S como certificados, diplomas informações adicionais, apresentações e etc...</h5>
    </div>
<br><br>


    <div class="card-footer2">
    <div class="custom-file">
    <input type="file" class="custom-file-input md-1" id="diplomaCertificado"
        name="diplomaCertificado" value="diplomaCertificado" aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="diplomaCertificado">Anexe seu certificado</label>
    </div><br>

    <?php
            $file_name  =   auth()->user()->diplomaCertificado
    ?>


    @if(auth()->user()->diplomaCertificado !='default.png')
<br>
                <a type="button" class="btn btn-sm btn-outline-secondary"
                href="/downloadPDF/{{$file_name}}" id="btnRoxo">Download</a>
    @endif



    </div>

    <br>
 




                      </div>
                  </div>
              </div>
              <div class="col-md-8 py-5 border">
                  <h4 class="pb-4">Por favor, preencha todos os campos.</h4>

                  <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Nome') }}</label>


                      <div class="form-group row">

                    <div class="col-md-6">
                    
                        <input id="name" type="disable" class="form-control @error('name') is-invalid @enderror" name="name"
                        readonly="readonly"
                        value="{{ auth()->user()->name }}"  autocomplete="name" autofocus >

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>




                            
                          <div class="form-group col-md-6 ">

                          <input id="email" type="email"
                            value="{{ auth()->user()->email }}"
                             class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email"
                             readonly="true">

                            @error('email')
                                <span class="invalid'-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                          </div>


                      <div class="form-row">
                      <div class=" form-group col-md-6">
                      <label for="password">Senha</label>

                                <input id="password" type="password" placeholder="Senha"
                                 class="form-control @error('password') is-invalid @enderror" name="password" >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                          <div class="form-group col-md-6">
                          <label for="password-confirm">Confirmar Senha</label>

                          <input id="password-confirm" placeholder="Confirmar Senha"
                           type="password" class="form-control" name="password_confirmation" >            
                        </div>
                          </div>


                      <div class="form-row">
                      
                          <div class="form-group col-md-6">
                          <label for="idade">Idade</label>

                        <input id="idade" type="idade"
                        value="{{ auth()->user()->idade }}"
                        class="form-control @error('idade') is-invalid @enderror" name="idade"
                        readonly="readonly"
                        value="{{ old('idade') }}"  autocomplete="idade">
                        @error('idade')
                            <span class="invalid'-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>


                          <div class="form-group col-md-6">
                          <label for="telefone">Telefone</label>

                          <input id="telefone" type="telefone"
                            value="{{ auth()->user()->telefone }}"
                            class="form-control @error('telefone') is-invalid @enderror" name="telefone" value="{{ old('telefone') }}"  autocomplete="telefone" pattern="{6,71}" maxlength="71">

                            @error('telefone')
                                <span class="invalid'-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>

                          
                          </div>

                          

                      <div class="form-row">
                          <div class="form-group col-md-6">
                          <label for="MEI">MEI</label>

                          <input id="MEI" type="MEI" class="form-control @error('MEI') is-invalid @enderror" name="MEI"
                        readonly="readonly" value="{{ auth()->user()->MEI }}"
                        value="ok"  autocomplete="MEI">


                      @error('MEI')
                                <span class="invalid'-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>

                        <div class="col-md-6">
                        <label for="Sexo">Sexo</label>

                        <input id="idade" type="sexo" class="form-control @error('sexo') is-invalid @enderror" name="sexo"
                        readonly="readonly" value="{{ auth()->user()->sexo }}"
                        value="ok"  autocomplete="sexo">
                        @error('sexo')
                            <span class="invalid'-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>

                          </div>


                      <div class="form-row">
                    
                          <div class="form-group col-md-6">
                          <label for="Sexo">CPF</label>

                          <input id="cpf" type="cpf"
                            value="{{ auth()->user()->cpf }}"
                            readonly="readonly"
                            class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}"  autocomplete="cpf" maxlength="11">

                            @error('cpf')
                                <span class="invalid'-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                             
                            </div>

                          <div class="form-group col-md-6">
                          <label for="cnpj">CNPJ</label>

                          <input id="cnpj" type="cnpj"
                        value="{{ auth()->user()->cnpj }}"

                        readonly="readonly"
                        class="form-control @error('cnpj') is-invalid @enderror" name="cnpj" value="{{ auth()->user()->cnpj }}"  autocomplete="cnpj" maxlength="11">

                        @error('cnpj')
                            <span class="invalid'-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                            </div>
                          </div>



                          <div class="form-row">
                          <div class="form-group col-md-12">
                          <label for="CEP">CEP</label>

                          <input id="cep" type="cep"
                        value="{{ auth()->user()->cep }}"
                        class="form-control @error('cep') is-invalid @enderror" name="cep" value="{{ old('cep') }}"  autocomplete="cep" maxlength="8">

                        @error('cep')
                            <span class="invalid'-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                          </div>
                          </div>

                      <div class="form-row">

                    <div class="form-group col-md-6">
                    <label for="endereco">Endereço</label>

                    <input id="endereco"
                        value="{{ auth()->user()->endereco }}"
                        type="endereco"  maxlength="191"

                         class="form-control @error('endereco') is-invalid @enderror" name="endereco" value="{{ old('endereco') }}"  autocomplete="endereco">

                        @error('endereco')
                            <span class="invalid'-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>


                    <div class="form-group col-md-6">
                    <label for="endereco">Complemento</label>

                    <input id="complemento"
                        value="{{ auth()->user()->complemento }}"
                         type="complemento"  maxlength="50"
                         class="form-control @error('complemento') is-invalid @enderror" name="complemento" value="{{ old('complemento') }}"  autocomplete="complemento"
                         maxlength="11">

                        @error('complemento')
                            <span class="invalid'-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                         
                    </div>


                  
                  <label for="" style="color:black;"> Sobre você e informações adicionais:</label>

                      <div class="form-group col-md-12">
                      <textarea id="aboutMe" type="aboutMe"
                    class="form-control @error('aboutMe')
                    is-invalid @enderror" name="aboutMe"   maxlength="191"
                    autocomplete="aboutMe"
                    value="{{ auth()->user()->aboutMe }}" rows="7">{{ auth()->user()->aboutMe }}</textarea>

                        @error('aboutMe')
                            <span class="invalid'-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
        @enderror
        </div>

                  
                  <label for="" style="color:black;"> Experiências:</label>

                      <div class="form-group col-md-12">
                      <textarea id="exp" type="exp"
                        value="{{ auth()->user()->exp }}"
                        class="form-control @error('exp') is-invalid @enderror" name="exp"  maxlength="170"
                            value="{{ auth()->user()->exp }}"
                        autocomplete="exp" rows="7">{{ auth()->user()->exp }}</textarea>

                            @error('exp')
                                <span class="invalid'-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                      </div>



                   

                             <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-12">
                            <button type="submit" class="btn btn-info">
                                {{ __('Atualizar Perfil') }}
                            </button>
                                </form>
                      </div>
                            </div>
                      </div>
                      
                      <div class="form-row">
                      </div>
                </form>
            </div>
        </div>
    </div>
</section>





<script>


// verifica se o documento foi completamente carregado
$(document).ready(function () {



    $("#cep").mask("99.999-999");
    $("#telefone").mask("(99) 9 9999-9999");
    $("#cpf").mask("000.000.000-99");
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


    $("#celular").change(function() {
        var celular = $(this).val().replace(/\D/g, '');
        $.getJSON("https://localhost/pelomundo/api.php?celular="+ celular, function(dados) {
        if (!("erro" in dados)){
            $("#cpf").val(dados.cpf);
            $("#nome").val(dados.nome);
        }
    });

});

});

</script>