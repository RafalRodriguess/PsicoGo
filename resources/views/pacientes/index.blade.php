@extends('layouts.app')
@extends('layouts.template')

@section('content')
    <div class="main">
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Pacientes</h2>
                    <a href="{{ route('pacientes.create') }}" class="btn btn-primary">+ Novo Paciente</a>
                </div>

                <table>
                    <thead>
                        <tr>
                            <td>Nome</td>
                            <td>Email</td>
                            <td>Telefone</td>
                            <td>Endereço</td>
                            <td>Ações</td>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($pacientes as $paciente)
                            <tr>
                                <td>{{ $paciente->nome }}</td>
                                <td>{{ $paciente->email }}</td>
                                <td>{{ $paciente->telefone }}</td>
                                <td>{{ $paciente->endereco }}</td>
                                <td>
                                    <a href="{{ route('pacientes.edit', $paciente->id) }}" class="btn btn-outline-secondary">
                                        <i class="bx bx-edit me-0"></i>
                                    </a>
                                    
                                    <form action="{{ route('pacientes.destroy', $paciente->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger">
                                            <i class="bx bx-trash me-0"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    
                    
                    
                </table>
            </div>
        </div>
    </div>
@endsection
