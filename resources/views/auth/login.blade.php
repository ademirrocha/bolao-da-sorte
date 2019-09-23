@extends('layouts.app')
@section('css')
<link href="{{ asset('vendor/myzzy/css/styles-login.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="login-page">
  <div class="form">
    <form class="login-form" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group row">
            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Seu E-Mail">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Sua Senha">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>


            </div>
        </div>
        @if (Route::has('password.request'))
        <p class="message">
            <a class="btn btn-link" href="{{ route('password.request') }}">
                Esqueceu sua senha
            </a>
        </p>
        @endif
        <p class="message">Ainda não é registrado? <a href="{{ route('register') }}">Crie sua conta</a></p>
    </form>
</div>
</div>


@endsection
