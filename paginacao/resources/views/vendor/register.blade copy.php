@extends('layouts.iframe')


 @section('content2')
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<!-- <script src="jsIframe/code.jquery.com/jquery-1.11.1.min.js"></script> -->

<script src="teste"></script>
<link href="{{ asset('cssIframe/styleIframe.css') }}" rel="stylesheet">



</head>
<body>
<div class="container">
	<div class="row">
		<section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-folder-open"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-picture"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <form role="form">
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <h3>Step 1</h3>

                        <!-- parte cadastro -->
                <form>
                    <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>

                <div class="col-md-6">
                    <input id="name" type="text"
                    required
                    maxlength="191"

                    class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="name" autofocus>

                    
                </div>
            </div>

                <div class="form-group row">
                    <label for="telefone" class="col-md-4 col-form-label text-md-right">Telefone</label>

                    <div class="col-md-6">
                        <input id="telefone" type="telefone"
                        maxlength="71"
                        required
                        class="form-control @error('telefone') is-invalid @enderror" name="telefone" required autocomplete="telefone">


                    </div>
                </div>


                    <div class="form-group row">
                        <label for="idade" class="col-md-4 col-form-label text-md-right">Idade</label>

                        <div class="col-md-6">
                        <input id="idade" type="text"
                        maxlength="2"
                        required
                        class="form-control @error('idade') is-invalid @enderror" name="idade" required autocomplete="idade">
                        </div>
                    </div>


                         <div class="form-group row">
                        <label for="MEI" class="col-md-4 col-form-label text-md-right">MEI</label>

                        <div class="col-md-6">
                             <select class="form-control" id="meiSelect"  name="meiSelect" >
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
                            </select>

                        </div>
                    </div>

                    <ul class="list-inline pull-right">
                        <li><button type="button" class="btn btn-primary next-step" id="btnFmr1" >Próximo</button></li>
                    </ul>
  
<!-- parte cadastro -->

                    </div>
                    <div class="tab-pane" role="tabpanel" id="step2">
                        <h3>Complete o formulário</h3>

                        <!-- parte cadastro 2 -->
                        <div class="form-group row">
                        <label for="sexo" class="col-md-4 col-form-label text-md-right">Sexo</label>

                        <div class="col-md-6">
                             <select class="form-control" id="exampleSelect1"  name="sexo" required>
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                                <option  value="Outro">Outro</option>
                            </select>
                        </div>
                    </div>



                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                maxlength="191"
                                required
                                 class="form-control @error('email') is-invalid @enderror" name="email"  required autocomplete="email">
                            </div>
                        </div>

                     <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Senha</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" required>

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar Senha</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" required>
                            </div>
                        </div>  
                         <h3>Localização</h3>


                                             <div class="form-group row">
                        <label for="cpf" class="col-md-4 col-form-label text-md-right">Cpf</label>

                        <div class="col-md-6">
                            <input id="cpf" type="cpf"
                                maxlength="11"
                             class="form-control @error('cpf') is-invalid @enderror" name="cpf"  required autocomplete="cpf" required>
                        </div>
                    </div>


        <div class="form-group row">
                        <label for="cep"  class="col-md-4 col-form-label text-md-right">Cep</label>

                        <div class="col-md-6">
                            <input id="cep" type="cep"
                              maxlength="8"

                             class="form-control @error('cep') is-invalid @enderror" name="cep" required autocomplete="cep" required>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="cnpj" class="col-md-4 col-form-label text-md-right">Cnpj</label>

                        <div class="col-md-6">
                            <input id="cnpj" type="cnpj"
                              maxlength="11"

                             class="form-control @error('cnpj') is-invalid @enderror" name="cnpj"  required autocomplete="cnpj" required>
                        </div>
                    </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Voltar</button></li>
                            <li><button type="button" class="btn btn-primary next-step" id="btnFmr2">Próximo</button></li>
                        </ul>
                    </div>
  <!-- parte cadastro 2 -->

                    <div class="tab-pane" role="tabpanel" id="step3">
                        <h3>Finalize o formulário</h3>

                        <div class="form-group row">
                        <label for="endereco" class="col-md-4 col-form-label text-md-right">Endereço</label>

                        <div class="col-md-6">
                            <input id="endereco" type="endereco"
                            maxlength="191"
                             class="form-control @error('endereco') is-invalid @enderror" name="endereco"   autocomplete="endereco" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="complemento" class="col-md-4 col-form-label text-md-right">Complemento</label>
                        <div class="col-md-6">
                            <input id="complemento" class="col-md-4 col-form-label text-md-right" type="complemento" maxlength="50" required>
</div>
</div>

                        
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Voltar</button></li>
                            <!-- <li><button type="button" class="btn btn-default next-step">Skip</button></li> -->
                            <li><button type="submit" class="btn btn-primary btn-info-full next-step" >Concluir</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="complete">
                        <h3>Finalmente</h3>
                        <p>Todos os passos foram completados com sucesso, aguarde alguns instantes.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </section>
   </div>
</div>

</body>
</html>

@endsection
</body>

<script>

$(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var proximo = false;
        var msg='Ok, proximo passso';

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');


        if ( $(this).prop('id') == 'btnFmr1' ){
            if (
                $("#meiSelect").val()!='' &&
                $("#name").val()!='' &&
                $("#telefone").val()!='' &&
                $("#idade").val()!=''
            ){
                proximo = true;
            }else{
                msg = "Preechas os dados";
            }
        }else if ( $(this).prop('id') == 'btnFmr2' ) {
            if(
                $("#cnpj").val()!='' &&
                $("#cep").val()!='' &&
                $("#cpf").val()!='' &&
                $("#password-confirm").val()!='' &&
                $("#password").val()!='' &&
                $("#email").val()!='' &&
                $("#exampleSelect1").val()!=''
            ){
                proximo = true;
            }else{
                    msg = "Preencha os dados"
            }
        }else if ( $(this).prop('id') == 'btnFmr3' ) {
        if(
            $("#endereco").val()!='' &&
            $("#complemento").val()!=''
        ){
            proximo = true;
        }else{
            msg = "Preencha os dados"
        }
    }

        if ( proximo ){
            nextTab($active);
        }else{
            alert( msg ); 
        }

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}

function myVerificaFormPt1(){

    var mei = document.GetElementById("meiSelect").value;
    var name = document.GetElementById("name").value;
    var telefone = document.GetElementById("telefone").value;
    var idade = document.GetElementById("idade").value;
//    alert(mei,name,telefone ,idade)

    var mensagem = "Você não preencheu todos os campos";

    if (mei == "" || name == "" || telefone == "" || idade == "") {
        alert(mensagem);
    }else {

    }
}






</script>

</html>
