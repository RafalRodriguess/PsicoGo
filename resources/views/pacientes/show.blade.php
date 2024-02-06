@extends('layouts.app')
@extends('layouts.template')

@section('content')
    <div class="main">
        <div class="detailscard">
            <div class="recentOrders">
                <div class="cardHeader">
            <h3 class="mb-4">Detalhes do Paciente</h3>
        </div>
            <p>Nome: {{ $paciente->nome }}</p>
            <p>Email: {{ $paciente->email }}</p>
            <p>Telefone: {{ $paciente->telefone }}</p>
            <p>Endereço: {{ $paciente->endereco }}</p>

            <!-- Outros detalhes que você deseja exibir -->

            <a href="{{ route('pacientes.edit', $paciente->id) }}" class="btn btn-primary">Editar</a>
            <form method="post" action="{{ route('pacientes.destroy', $paciente->id) }}" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Excluir</button>
            </form>
        </div>
    </div>
@endsection
