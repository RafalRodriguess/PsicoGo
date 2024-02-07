<?php

namespace App\Http\Controllers;
use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{

    public function index()
    {
        $pacientes = Paciente::all();
        return view('pacientes.index', ['pacientes' => $pacientes]);
    }
    
    

    public function show(Paciente $paciente)
    {
        $paciente->load('agendamentos'); // Carregar relacionamento agendamentos
        return view('pacientes.show', compact('paciente'));
    }
    public function create()
    {
        return view('pacientes.create');
    }

    public function store(Request $request)
    {
        // Validação dos campos
        $request->validate([
            'nome' => 'required|string|max:255',
            'telefone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'endereco' => 'required|string|max:255',
        ]);

        // Criação do Paciente
        Paciente::create([
            'nome' => $request->input('nome'),
            'telefone' => $request->input('telefone'),
            'email' => $request->input('email'),
            'endereco' => $request->input('endereco'),
        ]);

        return redirect()->route('pacientes.index')->with('success', 'Paciente cadastrado com sucesso!');
    }
    public function edit(Paciente $paciente)
{
    return view('pacientes.edit', compact('paciente'));
}

public function update(Request $request, Paciente $paciente)
{
    $request->validate([
        'nome' => 'required|string|max:255',
        'telefone' => 'required|string|max:15',
        'email' => 'required|email|max:255',
        'endereco' => 'required|string|max:255',
    ]);

    $paciente->update([
        'nome' => $request->input('nome'),
        'telefone' => $request->input('telefone'),
        'email' => $request->input('email'),
        'endereco' => $request->input('endereco'),
    ]);

    return redirect()->route('pacientes.show', $paciente->id)->with('success', 'Paciente atualizado com sucesso!');
}

public function destroy(Paciente $paciente)
{
    // Exclui os agendamentos associados ao paciente
    $paciente->agendamentos()->delete();

    // Em seguida, exclui o próprio paciente
    $paciente->delete();

    // Redireciona de volta para a página de listagem de pacientes
    return redirect()->route('pacientes.index')->with('success', 'Paciente excluído com sucesso.');
}
}
