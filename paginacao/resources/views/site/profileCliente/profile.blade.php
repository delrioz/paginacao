

  <title>Findeela</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="css/app.css">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">



  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style type="text/css">

   #btn-search{
    background: rgb(87, 13, 119);
    color: #fff;
    border-color: purple;
}

    </style>


<div class="container">

<hr>
<br><br>

  @extends('layouts.navbarclientespainel')


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




<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">

<article class="card-body">

<form action = "{{ route('Clienteprofile.update') }}" method="POST" enctype="multipart/form-data">

     {!! csrf_field() !!}


    <img id="img_sex" class="img-thumbnail"
      src="{{ url('storage/users/'.auth()->guard('cliente')-> user()->image) }}"
     alt=""
     ><br><br>



      <label for="exampleFormControlFile1">Selecione uma imagem</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1"
      name="image" value="{{ auth() ->guard('cliente')-> user()->image }}"
      class="py-3">

  <br><br>


  <div class="form-row">
    <div class="col form-group">
      <label>Nome </label>
        <input type="text" class="form-control" placeholder="" readonly="readonly"
         value="{{ auth() ->guard('cliente')-> user()->name }}"
        >
    </div> <!-- form-group end.// -->



  </div> <!-- form-row end.// -->



    <div class="form-group">
      <label>Email</label>
      <input type="email" class="form-control" placeholder=""

                value="{{ auth() ->guard('cliente')-> user()->email }}"
               name="email"
              value="{{ auth() ->guard('cliente')-> user()->email }}"
              placeholder="example@gmail.com"
              readonly="true" 
              required>

      <small class="form-text text-muted"></small>

    </div>



  <!-- form-group end.// -->
<!--   <div class="form-group">
      <label class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="gender" value="option1">
      <span class="form-check-label"> Male </span>
    </label>
    <label class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="gender" value="option2">
      <span class="form-check-label"> Female</span>
    </label>
  </div>
  <!-- form-group end.// -->


<!--
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>City</label>
      <input type="text" class="form-control">
    </div>  --> <!-- form-group end.// -->
    <!-- <div class="form-group col-md-6">
      <label>Country</label>
      <select id="inputState" class="form-control">
        <option> Choose...</option>
          <option>Uzbekistan</option>
          <option>Russia</option>
          <option selected="">United States</option>
          <option>India</option>
          <option>Afganistan</option>
      </select>
    </div> --> <!-- form-group end.//
  </div>  form-row.// -->



    <div class="form-group">
          <label for="password" class="col-form-label">Senha</label>
          <input type="password" class="form-control" id="password"  name="password"
          placeholder="Digite Sua senha" >
          <div class="password-feedback">
        </div>
    </div>


      <div class="form-group">
          <label for="password-confirm" class="col-form-label">Confirmar Senha</label>
          <input type="password" class="form-control" id="password-confirm"
          name="password_confirmation"  autocomplete="new-password"
          placeholder = "confirmar nova senha" >
          <div class="password-confirm-feedback">

          </div>
      </div>




    <div class="form-group">
        <button type="submit" class="btn btn-warning btn-block"> Atualizar</button>
    </div>





</form>


</article> <!-- card-body end .// -->

</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->




</div>
<!--container end.//-->

<br><br>
