@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
        <img src="/uploads/avatars/{{ $user->image }}"
        style="width:150px; height:150px; float:left;
        border-radius:50%; margin-right:25px;">
        <h2>{{ $user->name }}'s Profile</h2>
        <form enctype="multipart/form-data" action="/perfilvendedor" method="POST">
        <label>Atualizar foto de perfil</label><br>
        <input type="file" class="form-control-file" id="exampleFormControlFile1"
            name="image">
              @csrf
        <input type="submit" class="pull-right btn btn-sm btn-primary">
        </form>
        </div>
    </div>
</div>
@endsection
