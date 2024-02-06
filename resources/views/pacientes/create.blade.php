@extends('layouts.app')
@extends('layouts.template')

@section('content')

<div class="main">
    <div class="detailscard">
        <div class="recentOrders">
            <div class="cardHeader">
                <h3>Cadastro de Paciente</h3>
            </div>
            <form method="post" action="{{ route('pacientes.store') }}" class="row g-3">
                @csrf
                <div class="col-md-6">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                </div>
                <div class="col-md-12">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
                </div>
                <div class="col-md-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <div class="col-md-12">
                    <label for="endereco" class="form-label">Endereço</label>
                    <textarea class="form-control" id="endereco" name="endereco" placeholder="Endereço..." rows="3"></textarea>
                </div>
                <div class="col-md-12">
                    <div class="d-md-flex d-grid align-items-center gap-3">
                        <button type="submit" class="btn btn-primary px-4">Cadastrar</button>
                        <button type="button" class="btn btn-light px-4">Limpar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

