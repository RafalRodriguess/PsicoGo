@extends('layouts.app')

@section('content')
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h1>Crie sua conta</h1>
                <span>Seja Bem-Vindo</span>
                <input type="text" name="name" placeholder="Nome" required />
                <input type="email" name="email" placeholder="Email" required />
                <input type="password" name="password" placeholder="Senha" required />
                <input type="password" name="password_confirmation" placeholder="Confirmação de senha" required />
                <button type="submit">Criar conta</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h1>Login</h1>
                <span>Insira sua informações e acesse sua conta:</span>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password" placeholder="Senha">
                <a href="{{ route('password.request') }}">Esqueceu sua senha?</a>
                <button type="submit">Entrar</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Bem-vindo de volta!</h1>
                    <p>Para se manter conectado conosco, faça login com suas informações pessoais</p>
                    <button class="ghost" id="signIn">Login</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Olá Quest's</h1>
                    <p>Crie sua conta, insira seus dados pessoais e comece sua jornada conosco</p>
                    <button class="ghost" id="signUp">Criar conta</button>
                </div>
            </div>
        </div>
    </div>
@endsection
