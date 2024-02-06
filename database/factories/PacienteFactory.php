<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Paciente;

class PacienteFactory extends Factory
{
    protected $model = Paciente::class;

    public function definition(): array
    {
        return [
            'nome' => $this->faker->name,
            'telefone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'endereco' => $this->faker->address,
        ];
    }
}
