<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model{
    
    // Definindo cpf como chave primária
    protected $primaryKey = 'cpf';
    public $incrementing = false; // Certifica-se que a chave não é auto-incrementada
    protected $keyType = 'string'; // Define o tipo da chave como string, se o CPF for tratado como string

    // Campos que podem ser preenchidos em massa
    protected $fillable = [

        'cpf',
        'primeiro_nome',
        'sobrenome',
        'crm',
        'area',
        'salario',
        'data_nascimento',
        'sexo',
    ];
}
