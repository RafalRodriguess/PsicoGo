@extends('layouts.app')
@extends('layouts.template')

@section('content')
    <div class="main">
        <div class="detailscard">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Editar Paciente</h2>
                </div>
                <form method="post" action="{{ route('pacientes.update', $paciente->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="{{ $paciente->nome }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $paciente->email }}" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" value="{{ $paciente->telefone }}" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" value="{{ $paciente->endereco }}" required>
                    </div>
                    <!-- ... (Outros campos) ... -->

                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.querySelector('form');
            form.addEventListener('submit', function () {
                toastr.success('Paciente alterado com sucesso!');
                // Adicione o redirecionamento aqui
                window.location.href = '{{ route('pacientes.index') }}';
            });
        });
    </script>
@endsection

