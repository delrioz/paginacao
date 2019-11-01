@section('index-content')

<style>
img {width:100%;}

 #btnRoxo{
    background: rgb(87, 13, 119) !important;
    color: #fff !important;
    border-color: purple !important;
}

</style>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">

     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="css/app.css">
     <link rel="stylesheet" href="estilo.css">
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


  @extends('layouts.sidebaradmin')

<br>
<br>
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






<div class="card border">
 <div class="card-body">
        <form action="{{ route('adminanuncios.store') }}" method="POST" enctype="multipart/form-data">
   @csrf

   <section class="testimonial py-5" id="testimonial">
    <div class="container"  style="box-shadow: 0 4px 12px 0 rgba(0, 0, 2, 0.2), 0 7px 20px 0 rgba(0, 0, 0, 0.19)">
        <div class="row ">
            <div class="col-md-4 py-5 bg-primary text-white text-center "
             id="btnRoxo">
                <div class=" ">
                    <div class="card-body">
                        <img src="{{ asset('findeela/Findeela BandW.png') }}" style="width:30%">
                        <h2 class="py-3">Cadastrando anúncio</h2>
                        <p>Cadastre seu anúncio com todas especificações necessárias. Trate-se de convencer seu cliente de que 
                        você é a melhor solução para os seus problemas.

</p>
<BR>


  <label for="exampleFormControlFile1">Exemplo de input de arquivo</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1"
                name="image" required="true">
                    </div>
                </div>
            </div>
            <div class="col-md-8 py-5 border">
                <h4 class="pb-4">Por favor, preencha todos os campos.</h4>



                    <div class="form-row">
                        <div class="form-group col-md-12">
                          <input id="titulo" name="titulo"  id="titulo"  placeholder="Título" class="form-control" type="text" required>
                        </div>

                        
                        </div>


                    <div class="form-row">
                        <div class="form-group col-md-6">
                          
                                  
                        <select id="categoria" name="categoria" class="form-control">
                                  <option selected>Categoria ...</option>
                                    <option> Educacional</option>
                                    <option> Serviços Gerais</option>
                                    <option> Serviços de Freelancer</option>

                                  </select>

                        </div>
                        <div class="form-group col-md-6">
                                  
                                  <select  id="mei"  name="mei" class="form-control">
                                    <option selected>Possui MEI? ...</option>
                                    <option> Sim</option>
                                    <option> Não</option>
                                  </select>
                        </div>

                        </div>



                        <input type="hidden" id="users_id" name="users_id" value="{{ Auth::user()->id  }} ">


                    <div class="form-row">
                   
                        <div class="form-group col-md-6">
                            <input id="cep" name="cep" placeholder="CEP" class="form-control" required  type="text">
                        </div>

                        <div class="form-group col-md-6">
                        <input id="endereco" name="endereco"  placeholder="Endereço" class="form-control" type="text" required>
                        </div>
                        </div>


                    <div class="form-row">

                    <div class="form-group col-md-6">
                        <input id="complemento" name="complemento"  placeholder="Complemento" class="form-control" type="text" required>
                        </div>


                        <div class="form-group col-md-6">
                        <input type="text" class="form-control " id="bairro"
                      name="bairro"   placeholder="Seu Bairro" required
                        value="Cidade Nova" maxlength="45" >         
                        </div>
  





                        <div class="form-group col-md-6">
                        <input id="municipio" name="municipio"  placeholder="Município" class="form-control" type="text" required>
                        </div>


                        <div class="form-group col-md-6">
                                  
                                  <select id="UF" name="UF" class="form-control">
                                    <option selected>UF ...</option>
                                    <option> MG</option>
                                    <option> SP</option>
                                    <option> RJ</option>
                                    <option> SC</option>
                                    <option> RS</option>
                                    <option> BA</option>
                                  </select>
                        </div>






                
                <label for="" style="color:black;"> Descreva seu serviço:</label>

                    <div class="form-group col-md-12">
                            <textarea id="sobre" name="sobre"  cols="40" rows="5" class="form-control" ></textarea>
                    </div>
                    <button type="submit" class="btn btn-warning">Cadastrar</button>

                    </div>
                    
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

    // disparado quando o usuário alterar o cep
    $("#cep").change(function () {

        var cep = $("#cep").val();

        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/", function(dados) {

            if (!("erro" in dados)) {
                $("#endereco").val(dados.logradouro); //endereco
                $("#bairro").val(dados.bairro); //bairro
                $("#municipio").val(dados.localidade); //cidade //estado
                $("#UF").val(dados.uf); //estado
            }
        });

    });

});

</script>

@stop