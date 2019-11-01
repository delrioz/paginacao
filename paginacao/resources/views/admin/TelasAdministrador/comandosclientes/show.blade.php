
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/app.css">
  <!-- <link href="{{ asset('css/estilo.css') }}" rel="stylesheet"> -->
  <link rel="stylesheet" href="estilo.css">


    <title>Findeela-Atualizando Clientes</title>
    <style>
    body {
        color: #566787;
    background: #f5f5f5;
    font-family: 'Varela Round', sans-serif;
    font-size: 16px;
    }

      body{
          padding: 20px;
      }
      .navbar{
          margin-bottom:20px;
      }
    </style>

</head>

<body>

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
   <main role="main">



<div class="card border">
 <div class="card-body">
  <form action="/admin/acessarclientesviaadmin/salvar/{{$clientes->id}}" method="POST"
        enctype="multipart/form-data">


  @csrf

    <div class="form-group">
      <label for="name">Nome do cliente</label>
      <input type="text"  class="form-control" name="name" value="{{ $clientes->name }}"
      placeholder="Nome" id="name">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="text"  class="form-control" name="email" value="{{ $clientes->email }}"
      placeholder="email" id="email">
    </div>
    <div class="form-group">
      <label for="password">Senha</label>
      <input type="password"  class="form-control" name="password"
      placeholder="password" id="password">
    </div>
                        <div class="form-group">
                            <label for="password-confirm" class="col-form-label">Confirmar Senha</label>
                            <input type="password" class="form-control" id="password-confirm"
                            name="password_confirmation"  autocomplete="new-password"
                            placeholder = "confirmar nova senha" >
                            <div class="password-confirm-feedback">

                            </div>
                        </div>

    <!-- <div class="form-group">
      <label for="image">Image</label>
      <input type="text"  class="form-control" name="image" value="{{ $clientes->image }}"
      placeholder="image" id="image">
    </div> -->

            @if($clientes->image !=null)
            <img src="{{ url('storage/users/'.$clientes->image) }}"
             alt="{{$clientes->image}}"  class="img-thumbnail"  style="width: 200px" align="right"><br>
            @endif
     <br>

  <br>

  <div class="custom-file">
    <input type="file" class="custom-file-input md-3" id="image"  name="image" value="image" aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="image">Escolha uma imagem de perfil</label>
  </div>


    <div class="form-group">
      <label for="created_at">Criado em:</label>
      <input type="disabled"  class="form-control" name="criado" value="{{ $clientes->created_at }}"
      placeholder="created_at" id="created_at"  readonly="readonly">
    </div>
    <div class="form-group">
      <label for="updated_at">Ultima atualização:</label>
      <input type="disabled"  class="form-control" name="att" value="{{ $clientes->updated_at }}"
      placeholder="updated_at" id="updated_at" readonly="readonly">
    </div>

    <button type="submit" class="btn btn-warning btn-sm">Alterar</button>
    <button type="reset" class="btn btn-danger btn-sm">Cancelar</button>
  </form><br>

  <a href="/admin/acessarclientes" class="btn btn-primary">Voltar</a>

 </div>

</div>
 </main>
   </div>
