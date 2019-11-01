<!DOCTYPE html>
<html>
<head>
    <title>Mensagem enviada pelo site</title>
    <meta charset="utf-8">
    <style>
        body{
            width:510px;
            margin:0;
            padding:0 20px;
            font-family:"Raleway", sans-serif;
            font-size:12px;
        }
        h1{
            font-size:20px;
        }
        h2{
            font-size:16px;
        }
    </style>
</head>
<body>
<h2>
    Alguem se interessou pelo seu Anúncio !!
</h2>
<hr>
<p>
            <div class="alert alert-success">
            <h3 style="text-align:center;
                color:purple;
            ">Olá, {{$nameAnunciante}} você tem uma nova mensagem vinda do Findeela!</h3>
        </div>

            <div class="row" >
            <h3><strong>Título do Anúncio:</strong> {{$tituloAnuncio}} </h3>
           
            <h3> <strong> Categoria do Anúncio:</strong> {{$categoriaAnuncio}} </h3><br>
            </div>
            <div id="app">

            <div class="container">        

            <br>
           <h3 style="text-align:center; color:black;">Informações do interessado:</h3>
           <h3 style="color:black;"> <strong>Nome do Interessado:</strong> {{$nome}}<br>
           <h3 style="color:black;">  <strong>E-mail para contato:</strong> {{$email}}<br>
           <h3 style="color:black;">  <strong>Telefone: </strong>{{$telefone}}<br> <br>
           <h3 style="color:black;">  <strong>Mensagem:</strong><br> <?php echo nl2br($mensagem); ?>
</p> 



        <hr>

        <br><br>

    </div>
    <div>
    <p>
        <a href="http://localhost:8000/" title="Findeela">
        Findeela
        </a>
        <br>
        Av. Cristiano Machado, 1780<br>
        Belo Horizonte – CEP 31170-24<br>
        Cidade Nova – BH/MG – Brasil<br>
        Tel.: +55 31 3198403-6848
    </p>
</div>
</body>
</html>  