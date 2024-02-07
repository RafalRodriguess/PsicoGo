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

                <table class="table table-striped">
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

                                    <a href="{{ route('pacientes.show', $paciente->id) }}" class="btn btn-outline-primary">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </a>

                                    <a href="{{ route('pacientes.edit', $paciente->id) }}" class="btn btn-outline-secondary">
                                        <i class="bx bx-edit me-0"></i>
                                    </a>

                                    <!-- Botão para abrir o modal de confirmação de exclusão -->
                                    <button type="button" class="btn btn-outline-danger"
                                        onclick="confirmDelete('{{ route('pacientes.destroy', $paciente->id) }}')">
                                        <i class="bx bx-trash me-0"></i>
                                    </button>

                                    <!-- Modal de confirmação de exclusão -->
                                    <div class="modal fade" id="confirmDeleteModal_{{ $paciente->id }}" tabindex="-1"
                                        aria-labelledby="confirmDeleteModalLabel_{{ $paciente->id }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"
                                                        id="confirmDeleteModalLabel_{{ $paciente->id }}">Confirmar Exclusão
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body d-flex justify-content-center align-items-center">
                                                    <p class="text-center mb-0">Tem certeza que deseja excluir este
                                                        paciente? <br>
                                                    Todos os agendamentos que for desse paciente será excluido também tem certeza?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cancelar</button>
                                                    <form id="deleteForm_{{ $paciente->id }}" action=""
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Excluir</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <script>
                                        function confirmDelete(url) {
                                            // Define o action do formulário como a URL de exclusão
                                            document.getElementById('deleteForm_{{ $paciente->id }}').action = url;
                                            // Abre o modal de confirmação
                                            $('#confirmDeleteModal_{{ $paciente->id }}').modal('show');
                                        }
                                    </script>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
