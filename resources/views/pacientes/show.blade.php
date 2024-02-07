@extends('layouts.app')
@extends('layouts.template')

@section('content')
    <div class="main">

            <div class="detailscard">
                
            <div class="recentOrders">
                <a href="{{ route('pacientes.index') }}" class="btn btn-primary mb-3">
                    <i class="bx bx-arrow-back me-2"></i>Voltar
                </a>
                <div class="cardHeader">
                    <h2>Detalhes do Paciente</h2>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Nome:</label>
                        <p>{{ $paciente->nome }}</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email:</label>
                        <p>{{ $paciente->email }}</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telefone:</label>
                        <p>{{ $paciente->telefone }}</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Endereço:</label>
                        <p>{{ $paciente->endereco }}</p>
                    </div>
                    <div class="cardHeader">
                        <h2>Histórico de Agendamentos</h2>
                    </div>
    
                        @if($paciente->agendamentos->count() > 0)
                            <ul>
                                @foreach($paciente->agendamentos as $agendamento)
                                    <li>Data e Hora: {{ date('d/m/Y H:i', strtotime($agendamento->data_hora)) }}</li>
                                    <li>Status: {{ $agendamento->status }}</li>
                                    <hr>
                                @endforeach
                            </ul>
                        @else
                            <p>Nenhum agendamento encontrado para este paciente.</p>
                        @endif
                </div>
            </div>
            </div>

                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
