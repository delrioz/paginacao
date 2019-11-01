

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





  <!--NAVBAR-->
  <!--NAVBAR-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: #FFA500">

    <a href="/anuncios"  style="font-size:20px; color:black!important;" color= "purple";><img src="{{ asset('findeela/Findeela BandW.png') }}"
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



<style>
img {width:100%;}

 #btnRoxo{
    background: rgb(87, 13, 119) !important;
    color: #fff !important;
    border-color: purple !important;
}

</style>


<!------ Include the above in your HEAD tag ---------->


<section class="testimonial py-5" id="testimonial">
<div class="container"  style="box-shadow: 0 4px 12px 0 rgba(0, 0, 2, 0.2), 0 7px 20px 0 rgba(0, 0, 0, 0.19)">
        <div class="row ">
            <div class="col-md-4 py-5 bg-primary text-white text-center "
             id="btnRoxo">
                <div class=" ">
                    <div class="card-body">
                        <img src="{{ asset('findeela/Findeela BandW.png') }}" style="width:30%">
                        <h2 class="py-3">Editando anúncio</h2>
                        <p>Adicione ao  seu anúncio  todas as especificações necessárias. Trate-se de convencer seu cliente de que 
                        você é a melhor solução para os seus problemas.

</p>
<BR>

<form action="/meuservicos/{{$mservicos->id}}" id="editar" name="editar" method="POST" enctype="multipart/form-data">
   {!! csrf_field() !!}
   


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



                    </div>
                </div>
            </div>
            <div class="col-md-8 py-5 border">
                <h4 class="pb-4">Por favor, preencha todos os campos.</h4>

                       <div class="form-row">
                        <div class="form-group col-md-12">
                        <label for="titulo" class="">Título</label>

                          <input id="titulo" name="titulo" maxlength="130"  value="{{$mservicos->titulo}}"
                           placeholder="Título" class="form-control" type="text" required>
                        </div>

                  
                        </div>



                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="validationServer02">Categoria</label>

                        <select id="categoria" name="categoria" class="form-control">
                        <option selected>{{ $mservicos->categoria }}</option>
                        @foreach($categoria as $categorias)
                        <option>{{ $categorias->name }}</option>
                       @endforeach

                    </select>
                        </div>


                        <div class="form-group col-md-6">
                        <label for="validationServer02">Possui MEI?</label>

                        <select id="mei"  name="mei" class="form-control" readonly="readonly">
                        <option selected>{{ $mservicos->mei }}</option>

                        </select>
                        </div>

                        </div>




                        <div class="form-row">
                        <div class="form-group col-md-6">
                         <label for="cep">CEP</label>
                            <input  id="cep" name="cep" placeholder="CEP" 
                            value="{{ $mservicos->cep }}"  maxlength="8"
                            class="form-control" required="required" type="text" required>
                        </div>

                        

                        <div class="form-group col-md-6">
                        <label for="endereco" class="">Endereço</label>

                        <input id="endereco" name="endereco" 
                          maxlength="191" value="{{ $mservicos->endereco }}"
                         placeholder="Endereço" class="form-control" type="text" required>
                        </div>
                        </div>


                    <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="complemento">Complemento</label>

                        <input id="complemento" name="complemento"
                        value="{{ $mservicos->complemento }}" maxlength="50" 
                          placeholder="Complemento" class="form-control" type="text" required>
                        </div>

                        <div class="form-group col-md-6">
                        <label for="validationServer02">Bairro</label>

                        <input id="bairro" name="bairro" 
                        value="{{ $mservicos->bairro }}"
                         placeholder="Bairro" class="form-control" type="text" required> 
                        </div>


                        <div class="form-group col-md-6">
                        <label for="municipio" class="">Município</label>

                        <input id="municipio" name="municipio"
                          value="{{ $mservicos->municipio }}"  maxlength="125"
                          placeholder="Município" class="form-control" type="text" required>
                        </div>

                        <div class="form-group col-md-6">
                        <label for="validationServer02">UF</label>


                        <select id="UF"  name="UF" class="form-control" readonly="readonly">
                        <option selected>{{ $mservicos->UF }}</option>

                        </select>       

                      
                        </div>





                
                <label for="" style="color:black;"> Descreva seu serviço:</label>

                    <div class="form-group col-md-12">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                            placeholder=""
                           name="sobre" value="{{ $mservicos->sobre }}"
                           maxlength="320"
                            placeholder="sobre" id="sobre">{{ $mservicos->sobre }}
                    </textarea>

                    </div>
                    </div>
                    <button type="submit" class="btn btn-warning">Editar</button>
                    
                    </div>


                 </div>
                    
             </div>
              </div>              
                  </div>
<br>
                    <!-- <div class="alert alert-warning">
                           <h5>Dicas:</h5>
                           <h6>Deixar o seu anúncio mais objetivo e com uma boa imagem pode fazer aumentar os seu índice de aceitação</h6>
                    </div> -->
                </form>
            </div>
        </div>
    </div>
</section>

<script>


    // verifica se o documento foi completamente carregado
    $(document).ready(function () {



      $("#cep").mask("99.999-999");

      
//id do form
      $("#editar").submit(function(){
          $("#cep").unmask();

    });


    
        // disparado quando o usuário alterar o cep
        $("#cep").change(function () {

            var cep = $(this).val().replace(/\D/g, '');

            $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/", function(dados) {

                if (!("erro" in dados)) {
                $("#endereco").val(dados.logradouro); //endereco
                $("#bairro").val(dados.bairro); //bairro
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