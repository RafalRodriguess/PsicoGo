@extends('layouts.app')
@extends('layouts.template')

@section('content')
    <div class="main">
        <div class="details">
            <div class="recentOrders">
                <a href="{{ route('agendamentos.index') }}" class="btn btn-primary mb-3">
                    <i class="bx bx-arrow-back me-2"></i>Voltar
                </a>
                <div class="cardHeader">
                    <h2>Detalhes do Agendamento</h2>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Nome do Paciente:</label>
                        @if ($agendamento && $agendamento->paciente)
                            <p>{{ $agendamento->paciente->nome }}</p>
                        @else
                            <p>Paciente não encontrado</p>
                        @endif
                    </div>

                    @if ($agendamento && $agendamento->paciente)
                        <div class="recentOrders">
                            <div class="cardHeader">
                                <h2>Histórico de Agendamentos do Paciente</h2>
                            </div>

                            <div class="card-body">
                                @if ($agendamento->paciente->agendamentos->count() > 0)
                                    <ul>
                                        @foreach ($agendamento->paciente->agendamentos as $consulta)
                                            <li>Data e Hora: {{ date('d/m/Y H:i', strtotime($consulta->data_hora)) }}</li>
                                            <li>Status: {{ $consulta->status }}</li>
                                            <hr>
                                        @endforeach
                                    </ul>
                                @else
                                    <p>Nenhuma consulta agendada para este paciente.</p>
                                @endif
                            </div>
                        </div>
                    @else
                        <div class="alert alert-warning" role="alert">
                            Informações do paciente não disponíveis.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection