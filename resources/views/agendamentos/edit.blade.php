@extends('layouts.app')
@extends('layouts.template')

@section('content')
    <div class="main">
        
        <div class="detailscard">
            <div class="recentOrders">
                <a href="{{ route('agendamentos.index') }}" class="btn btn-primary mb-3">
                    <i class="bx bx-arrow-back me-2"></i>Voltar
                </a>
                <div class="cardHeader">
                    <h2>Editar Agendamento</h2>
                </div>

                <div class="card-body">
                    <form action="{{ route('agendamentos.update', $agendamento->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">Nome do Paciente:</label>
                            <p>{{ $agendamento->paciente->nome }}</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Data e Hora:</label>
                            <input type="datetime-local" name="data_hora" value="{{ date('Y-m-d\TH:i', strtotime($agendamento->data_hora)) }}" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status:</label>
                            <select name="status" class="form-select">
                                <option value="Concluido" @if($agendamento->status == 'Concluido') selected @endif>Concluído</option>
                                <option value="Pendente" @if($agendamento->status == 'Pendente') selected @endif>Pendente</option>
                                <option value="Cancelado" @if($agendamento->status == 'Cancelado') selected @endif>Cancelado</option>
                                <option value="Reagendado" @if($agendamento->status == 'Reagendado') selected @endif>Reagendado</option>
                                <option value="Em andamento" @if($agendamento->status == 'Em andamento') selected @endif>Em andamento</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
