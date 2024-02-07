@extends('layouts.app')
@extends('layouts.template')

@section('content')
    <div class="main">
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Agendamentos</h2>
                    <a href="{{ route('agendamentos.create') }}" class="btn btn-primary">+ Novo Agendamento</a>
                </div>

                <!-- Modal de confirmação de exclusão -->
                <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmar Exclusão</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Tem certeza que deseja excluir este agendamento?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <form id="deleteForm" action="" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="text-start">Nome do Paciente</th>
                            <th class="text-center">Data</th>
                            <th class="text-center">Status</th>
                            <th class="text-end" style="width: 200px;">Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php
                            $pacientes_listados = [];
                        @endphp
                        @foreach ($agendamentos as $agendamento)
                            @if (!in_array($agendamento->paciente_id, $pacientes_listados))
                                <tr>
                                    <td class="text-start">{{ $agendamento->paciente->nome }}</td>
                                    <td class="text-center">{{ date('d/m/Y H:i', strtotime($agendamento->data_hora)) }}</td>
                                    <td class="text-center">
                                        <span class="badge bg-{{ getStatusColor($agendamento->status) }}">{{ $agendamento->status }}</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="{{ route('agendamentos.show', $agendamento->id) }}" class="btn btn-outline-secondary btn-sm">
                                            <i class="bx bx-show me-1"></i> 
                                        </a>
                                        <a href="{{ route('agendamentos.edit', $agendamento->id) }}" class="btn btn-outline-primary btn-sm">
                                            <i class="bx bx-edit me-1"></i> 
                                        </a>
                                        <button type="button" class="btn btn-outline-danger btn-sm" onclick="confirmDelete('{{ route('agendamentos.destroy', $agendamento->id) }}')">
                                            <i class="bx bx-trash me-1"></i>
                                        </button>
                                    </td>
                                </tr>
                                @php
                                    $pacientes_listados[] = $agendamento->paciente_id;
                                @endphp
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function confirmDelete(url) {
            // Define o action do formulário como a URL de exclusão
            document.getElementById('deleteForm').action = url;
            // Abre o modal de confirmação
            $('#confirmDeleteModal').modal('show');
        }
    </script>
@endsection