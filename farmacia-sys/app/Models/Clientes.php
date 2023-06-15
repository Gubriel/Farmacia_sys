<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = [
        'nome',
        'rg',
        'cpf',
        'telefone',
        'email',
        'data_nasc',
        'peso',
        'altura',
        'cidade',
        'cep',
        'bairro',
        'rua',
        'numero',
    ];

}
