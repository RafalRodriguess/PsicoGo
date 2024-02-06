<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Paciente;

class PacienteSeeder extends Seeder
{
    /**
     * Executa a operação de seeding.
     *
     * @return void
     */
    public function run()
    {
        Paciente::factory()->count(20)->create();
    }
}
