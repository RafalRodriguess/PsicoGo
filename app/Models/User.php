<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // ...

    protected $fillable = [
        'name',
        'email',
        'password',
        'cpf',
        'data_nascimento',
        'phone', // Adicionado para armazenar o número de telefone
        'address', // Adicionado para armazenar o endereço
    ];

    // ...
}
