<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionarios extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'rg',
        'cpf',
        'telefone',
        'email',
        'data_nasc',
        'peso',
        'cep',
        'bairro',
        'rua',
        'numero',
    ];
}
