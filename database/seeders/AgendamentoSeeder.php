<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Agendamento;
use Carbon\Carbon;

class AgendamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Loop para criar 10 agendamentos
        for ($i = 0; $i < 10; $i++) {
            Agendamento::create([
                'descricao' => 'Agendamento ' . ($i + 1),
                'data_hora' => Carbon::now()->addDays($i),
                'data' => Carbon::now()->addDays($i)->toDateString(),
                'status' => 'Pendente',
                'paciente_id' => rand(1, 10), // ID do paciente vinculado (você pode ajustar conforme necessário)
            ]);
        }
    }
}
