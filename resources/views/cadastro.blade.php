<!-- resources/views/cadastro.blade.php -->
@extends('layouts.template')


@section('content')
<div class="main" >
<div class="container" style="padding-bottom: 30px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               
                

                <div class="card-body">
                    <form method="POST" action="{{ route('cadastro.store') }}">
                        @csrf
                        
                        <div class="card-body d-flex justify-content-center">Cadastro de Paciente e Agendamento</div>
                        <div class="mb-3">

                            <label for="nome" class="form-label">Nome:</label>
                            <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{ old('nome') }}" required autofocus>
                            @error('nome')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="telefone" class="form-label">Telefone:</label>
                            <input id="telefone" type="tel" class="form-control @error('telefone') is-invalid @enderror" name="telefone" value="{{ old('telefone') }}" required>
                            @error('telefone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="endereco" class="form-label">Endereço:</label>
                            <input id="endereco" type="text" class="form-control @error('endereco') is-invalid @enderror" name="endereco" value="{{ old('endereco') }}" required>
                            @error('endereco')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="data_hora" class="form-label">Data e Hora do Agendamento:</label>
                            <input id="data_hora" type="datetime-local" class="form-control @error('data_hora') is-invalid @enderror" name="data_hora" value="{{ old('data_hora') }}" required>
                            @error('data_hora')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">
                                Cadastrar e Agendar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
