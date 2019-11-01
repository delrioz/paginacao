@section('content')

@extends('layouts.app')


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>


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
          <a class="nav-link" href="/sobre">Sobre nós</a>
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


        <li class="nav-item active">
          <a class="nav-link" href="/paineladministrador">Painel Administrador</a>
        </li>








       <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Opções
           </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
             <a class="dropdown-item" href="/todosanunciosvend">Todos Anúncios</a>
             <a class="dropdown-item" href="/listarcategorias">Listar Categorias</a>
             <div class="dropdown-divider"></div>
             <a class="dropdown-item" href="/sobre">Sobre Nós </a>
           </div>
         </li>

      </ul>


   <form  method="POST" action= "{{ route('register') }}"  class="form-inline my-2 my-lg-0">
      @csrf
        <input class="form-control mr-sm-2" type="busca" placeholder="Digite o serviço o qual procura"
          aria-label="busca" size="70" name="text">
        <button class="btn btn-outline-warning my-2 my-sm-0" type="submit" id="btnRoxo">Pesquisar</button>
      </form>


    <ul class="navbar-nav mr-2">

    <li class="nav-item dropdown" id="liLogado">
       <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
           <span class="caret"></span>
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

    <br>

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

<form  action="{{ route('register') }}" method="POST" id="registro" enctype="multipart/form-data">
                 @csrf
<section class="testimonial py-5" id="testimonial">
    <div class="container"  style="box-shadow: 0 4px 12px 0 rgba(0, 0, 2, 0.2), 0 7px 20px 0 rgba(0, 0, 0, 0.19)">
        <div class="row ">
            <div class="col-md-4 py-5 bg-primary text-white text-center "
             id="btnRoxo">
                <div class=" ">
                    <div class="card-body">
                        <img src="{{ asset('findeela/Findeela BandW.png') }}" style="width:30%">
                        <h2 class="py-3">Criando  portifólio...</h2>
                        <p> Neste momento, você está criando sua conta e seu portifólio o qual os seus futuros clientes irão poder ter acesso. 

</p>
<BR>


<br>
<br>
<br>


  <div class="alert alert-warning" role="alert">
                <strong>Após Logado, Lembre-se de adicionar uma foto ao seu perfil no painel do administrador !</strong>
                <p><strong>No painel do Administrador você poderá adicionar também diplomas e certificações do serviço prestado</strong></p>
                </div>


<br><br>

  <div class="alert alert-info" role="alert">
                <strong>Capriche ao cadastrar seus dados!</strong>
                <p><strong>Essas informações irão estar presentes em seus anúncios, então é essencial que você passe credibilidade e 
                confiança aos seus clientes. </strong></p>
                </div>


                      </div>
                  </div>
              </div>
              <div class="col-md-8 py-5 border">
                  <h4 class="pb-4">Por favor, preencha todos os campos.</h4>



                      <div class="form-row">
                          <div class="form-group col-md-6">
                          <input id="name" type="text"

                        maxlength="191"

                        class="form-control @error('name') is-invalid @enderror" name="name"  placeholder="Nome" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                          <div class="form-group col-md-6">
                          <input id="email" type="email"
                                maxlength="191"

                                 class="form-control @error('email') is-invalid @enderror" name="email"   placeholder="Email" required autocomplete="email">

                                @error('email')
                                    <span class="invalid'-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          
                          </div>
                          </div>

                      <div class="form-row">
                      <div class=" form-group col-md-6">
                                <input id="password" type="password" placeholder="Senha"
                                 class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                          <div class="form-group col-md-6">
                          <input id="password-confirm" placeholder="Confirmar Senha"
                           type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">                          </div>

                          
                          </div>
                      <div class="form-row">
                          <div class="form-group col-md-6">
                          <input id="idade" type="text"
                        maxlength="2"
                        class="form-control @error('idade') is-invalid @enderror" name="idade" placeholder="Idade"  required autocomplete="idade">

                            @error('idade')
                                <span class="invalid'-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>




                          <div class="form-group col-md-6">

                          <input id="telefone" type="telefone"
                        maxlength="71"

                        class="form-control @error('telefone') is-invalid @enderror" name="telefone" placeholder="Telefone" required autocomplete="telefone">

                        @error('telefone')
                            <span class="invalid'-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                          </div>

                          
                          </div>



                          

                      <div class="form-row">
                          <div class="form-group col-md-6">
                          <Label style="center:right;">MEI</Label>

                          <select class="form-control" id="exampleSelect1"  name="MEI" placeholder="MEI" value="MEI">
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
                            </select>

                      @error('sexo')
                                <span class="invalid'-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>

                        <div class="col-md-6">
                        <Label style="center:right;">Sexo</Label>

                        <select class="form-control" id="exampleSelect1"  name="sexo" value="sexo">
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                                <option  value="Outro">Outro</option>
                            </select>
                        <br>
                            @error('sexo')
                                <span class="invalid'-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                          </div>


                      <div class="form-row">
                    
                          <div class="form-group col-md-6">
                          <input id="cpf" type="cpf"
                                maxlength="11"
                             class="form-control @error('cpf') is-invalid @enderror" name="cpf" placeholder="Cpf" required autocomplete="cpf">            

                             @error('cpf')
                                <span class="invalid'-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                             
                            </div>

                          <div class="form-group col-md-6">
                          <input id="cnpj" type="cnpj"
                              maxlength="14"

                             class="form-control @error('cnpj') is-invalid @enderror" name="cnpj" placeholder="Cnpj"  required autocomplete="cnpj">          


                             @error('cnpj')
                                <span class="invalid'-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            </div>
                          </div>



                          <div class="form-row">
                          <div class="form-group col-md-12">
                          <input id="cep" type="cep"
                              maxlength="8"

                             class="form-control @error('cep') is-invalid @enderror" name="cep" placeholder="Cep" required autocomplete="cep">
                             @error('cep')
                                <span class="invalid'-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror


                          </div>
                          </div>

                      <div class="form-row">

                    <div class="form-group col-md-6">
                    <input id="endereco" type="endereco"
                        maxlength="191"
                            class="form-control @error('endereco') is-invalid @enderror" name="endereco" placeholder="Endereço" required autocomplete="endereco">
                            
                            @error('endereco')
                                <span class="invalid'-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>


                    <div class="form-group col-md-6">
                    <input id="complemento" type="complemento"
                    maxlength="50"

                        class="form-control @error('complemento') is-invalid @enderror" name="complemento" placeholder="Complemento" required autocomplete="complemento">        

                        @error('complemento')
                                <span class="invalid'-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                         
                    </div>


                  
                  <label for="" style="color:black;"> Sobre você e informações adicionais:</label>

                      <div class="form-group col-md-12">
                      <textarea id="aboutMe" type="aboutMe"
                maxlength="191"

                class="form-control @error('aboutMe') is-invalid @enderror" name="aboutMe" value="{{ old('aboutMe') }}" required autocomplete="aboutMe" rows="7"></textarea>

                    @error('aboutMe')
                        <span class="invalid'-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        </div>

                  
                  <label for="" style="color:black;"> Experiências:</label>

                      <div class="form-group col-md-12">
                      <textarea id="exp" type="exp" class="form-control @error('exp') is-invalid @enderror" name="exp" value="{{ old('exp') }}"
                      maxlength="170" required autocomplete="exp" rows="7"></textarea>
                      @error('exp')
                <span class="invalid'-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                </span>
                    @enderror
                      </div>



                      <input  type="hidden" name="image" id="image" class="form-control" required
                placeholder="Sua image" value="default.png">

         <input  type="hidden" name="diplomaCertificado" id="diplomaCertificado" class="form-control" required
                placeholder="Sua diplomaCertificado" value="default.png">

                             <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-info" name="registrar" id="registrar">
                                    {{ __('Registrar') }}
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




@push('javascript')

<script>


// verifica se o documento foi completamente carregado
$(document).ready(function () {


    $("#cep").mask("99.999-999");
    $("#telefone").mask("(99) 9 9999-9999");
    $("#cpf").mask("999.999.999-99");
    $("#cnpj").mask("99.999.999/9999-99");

    
    $("#registro").submit(function(){
        $("#cep").unmask();
        $("#telefone").unmask();
        $("#cpf").unmask();
        $("#cnpj").unmask();

    });

    

    // disparado quando o usuário alterar o cep
    $("#cep").change(function () {

        var cep = $(this).val().replace(/\D/g, '');

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

@push('javascript')


@endsection
</body>
</html>
