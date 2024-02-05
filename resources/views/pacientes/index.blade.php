@extends('layouts.app')

@section('content')

<div class="main">
    <div class="details">
<div class="recentOrders">
    <div class="cardHeader">
        <h2>Pacientes</h2>
    </div>

    <table>
        <thead>
            <tr>
                <td>Nome</td>
                <td>Email</td>
                <td>Telefone</td>
                <td>Endereço</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($pacientes as $paciente)
            <tr>
                <td>{{ $paciente->nome }}</td>
                <td>{{ $paciente->email }}</td>
                <td>{{ $paciente->telefone }}</td>
                <td>{{ $paciente->endereco }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
</div>

@endsection
