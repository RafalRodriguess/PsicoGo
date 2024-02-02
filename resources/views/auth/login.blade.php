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
                <div class="containerimg">
                    <img src="/img/logo.png" alt="">
                </div>
                <h4 style="margin: 10px">Acesse sua conta:</h4>
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
                    <div class="quest">
                        <img src="/img/quest.png" alt="">
                    </div>
                    <div class="welcome-section">
                        <h2>Bem-vindo de volta!</h2>
                        <h5>Insira suas informações e acesse sua conta para continuar sua jornada de questionários. Faça parte da comunidade Quest's e faça seus questionamentos!</h5>
                        <button class="ghost" id="signIn">Entrar</button>
                    </div>
                </div>
                <div class="overlay-panel overlay-right">
                    <div class="men">
                        <img src="/img/men.png" alt="">
                    </div>
                    <h4>Junte-se a nós e comece a sua jornada de questionários! Crie sua conta agora e explore um mundo de conhecimento e desafios.</h4>
                    <button class="ghost" id="signUp">Criar conta</button>
                </div>
            </div>
        </div>
    </div>
@endsection
