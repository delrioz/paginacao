@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid'-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="telefone" class="col-md-4 col-form-label text-md-right">{{ __('telefone') }}</label>

                            <div class="col-md-6">
                                <input id="telefone" type="telefone" class="form-control @error('telefone') is-invalid @enderror" name="telefone" value="{{ old('telefone') }}" required autocomplete="telefone">

                                @error('telefone')
                                    <span class="invalid'-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    <div class="form-group row">
                        <label for="idade" class="col-md-4 col-form-label text-md-right">{{ __('idade') }}</label>

                        <div class="col-md-6">
                            <input id="idade" type="idade" class="form-control @error('idade') is-invalid @enderror" name="idade" value="{{ old('idade') }}" required autocomplete="idade">

                            @error('idade')
                                <span class="invalid'-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sexo" class="col-md-4 col-form-label text-md-right">{{ __('sexo') }}</label>

                        <div class="col-md-6">
                            <input id="sexo" type="sexo" class="form-control @error('sexo') is-invalid @enderror" name="sexo" value="{{ old('sexo') }}" required autocomplete="sexo">

                            @error('sexo')
                                <span class="invalid'-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>



                    <div class="form-group row">
                        <label for="cep" class="col-md-4 col-form-label text-md-right">{{ __('cep') }}</label>

                        <div class="col-md-6">
                            <input id="cep" type="cep" class="form-control @error('cep') is-invalid @enderror" name="cep" value="{{ old('cep') }}" required autocomplete="cep">

                            @error('cep')
                                <span class="invalid'-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('cpf') }}</label>

                        <div class="col-md-6">
                            <input id="cpf" type="cpf" class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}" required autocomplete="cpf">

                            @error('cpf')
                                <span class="invalid'-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="cnpj" class="col-md-4 col-form-label text-md-right">{{ __('cnpj') }}</label>

                        <div class="col-md-6">
                            <input id="cnpj" type="cnpj" class="form-control @error('cnpj') is-invalid @enderror" name="cnpj" value="{{ old('cnpj') }}" required autocomplete="cnpj">

                            @error('cnpj')
                                <span class="invalid'-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="MEI" class="col-md-4 col-form-label text-md-right">{{ __('MEI') }}</label>

                        <div class="col-md-6">
                            <input id="MEI" type="MEI" class="form-control @error('MEI') is-invalid @enderror" name="MEI" value="{{ old('MEI') }}" required autocomplete="MEI">

                            @error('MEI')
                                <span class="invalid'-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="endereco" class="col-md-4 col-form-label text-md-right">{{ __('endereco') }}</label>

                        <div class="col-md-6">
                            <input id="endereco" type="endereco" class="form-control @error('endereco') is-invalid @enderror" name="endereco" value="{{ old('endereco') }}" required autocomplete="endereco">

                            @error('endereco')
                                <span class="invalid'-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="complemento" class="col-md-4 col-form-label text-md-right">{{ __('complemento') }}</label>

                        <div class="col-md-6">
                            <input id="complemento" type="complemento" class="form-control @error('complemento') is-invalid @enderror" name="complemento" value="{{ old('complemento') }}" required autocomplete="complemento">

                            @error('complemento')
                                <span class="invalid'-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="aboutMe" class="col-md-4 col-form-label text-md-right">{{ __('aboutMe') }}</label>

                        <div class="col-md-6">
                            <input id="aboutMe" type="aboutMe" class="form-control @error('aboutMe') is-invalid @enderror" name="aboutMe" value="{{ old('aboutMe') }}" required autocomplete="aboutMe">

                            @error('aboutMe')
                                <span class="invalid'-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exp" class="col-md-4 col-form-label text-md-right">{{ __('exp') }}</label>

                        <div class="col-md-6">
                            <input id="exp" type="exp" class="form-control @error('exp') is-invalid @enderror" name="exp" value="{{ old('exp') }}" required autocomplete="exp">

                            @error('exp')
                                <span class="invalid'-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="aboutMe" class="col-md-4 col-form-label text-md-right">{{ __('image') }}</label>

                        <div class="col-md-6">
                        <input type="file" name="image" id="image" class="form-control" required
                                    placeholder="Sua image">
                            @error('aboutMe')
                                <span class="invalid'-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>




                    <div class="form-group row">
                        <label for="diplomaCertificado" class="col-md-4 col-form-label text-md-right">{{ __('diplomaCertificado') }}</label>

                        <div class="col-md-6">
                            <input id="diplomaCertificado" type="diplomaCertificado" class="form-control @error('diplomaCertificado') is-invalid @enderror" name="diplomaCertificado" value="{{ old('diplomaCertificado') }}" required autocomplete="diplomaCertificado">

                            @error('diplomaCertificado')
                                <span class="invalid'-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>






                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
