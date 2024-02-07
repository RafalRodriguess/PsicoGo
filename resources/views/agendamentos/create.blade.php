@extends('layouts.app')
@extends('layouts.template')

@section('content')
    <div class="main">
        <div class="detailscard">
            <div class="recentOrders">
                <a href="{{ route('agendamentos.index') }}" class="btn btn-primary mb-3">
                    <i class="bx bx-arrow-back me-2"></i>
                </a>
                <div class="cardHeader">
                    <h2>Novo Agendamento</h2>
                </div>

                <div class="card-body">
                    <form action="{{ route('agendamentos.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Paciente:</label>
                            <select name="paciente_id" class="form-select">
                                @foreach($pacientes as $paciente)
                                    <option value="{{ $paciente->id }}">{{ $paciente->nome }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Data:</label>
                            <input type="date" name="data" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Hora:</label>
                            <input type="time" name="hora" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Status:</label>
                            <select name="status" class="form-select">
                                <option value="Concluido">Concluído</option>
                                <option value="Pendente">Pendente</option>
                                <option value="Cancelado">Cancelado</option>
                                <option value="Reagendado">Reagendado</option>
                                <option value="Em andamento">Em andamento</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Criar Agendamento</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
