<?php

namespace App\Http\Controllers;
use App\Models\Paciente;

use Illuminate\Http\Request;
use App\Models\Agendamento;

class AgendamentoController extends Controller
{
    public function index()
    {
        $agendamentos = Agendamento::all();
        return view('agendamentos.index', compact('agendamentos'));
    }

    public function create()
    {
        $pacientes = Paciente::all(); 
        return view('agendamentos.create', compact('pacientes'));
    }


    public function show(Agendamento $agendamento)
{
    $agendamento->load('paciente'); // Carregar relacionamento paciente
    
    $paciente = $agendamento->paciente;
    return view('agendamentos.show', compact('agendamento'));
}

public function store(Request $request)
{
    // Validação dos dados do formulário
    $request->validate([
        'paciente_id' => 'required|exists:pacientes,id',
        'data' => 'required|date',
        'hora' => 'required',
        'status' => 'required|in:Concluido,Pendente,Cancelado,Reagendado,Em andamento',
    ]);

    // Criação do novo agendamento com os dados do formulário
    $agendamento = new Agendamento();
    $agendamento->paciente_id = $request->paciente_id;
    $agendamento->data_hora = $request->data . ' ' . $request->hora;
    $agendamento->status = $request->status;
    // Salva o novo agendamento
    $agendamento->save();

    // Redireciona de volta para a página de listagem de agendamentos
    return redirect()->route('agendamentos.index')->with('success', 'Agendamento criado com sucesso!');
}

    public function edit(Agendamento $agendamento)
    {
        return view('agendamentos.edit', compact('agendamento'));
    }

    public function update(Request $request, Agendamento $agendamento)
{
    $agendamento->update($request->all());

    return redirect()->route('agendamentos.index')->with('success', 'Agendamento atualizado com sucesso!');
}

public function destroy(Agendamento $agendamento)
    {
        $agendamento->delete();
        return redirect()->route('agendamentos.index')->with('success', 'Agendamento excluído com sucesso.');
    }
}
