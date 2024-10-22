<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model{
    
    protected $primaryKey = 'cpf';

    protected $fillable = [

        'primeiro_nome',
        'sobrenome',
        'crm',
        'area',
        'salario'

    ];

    protected $except = [
        '/medicos',  // Adicione a rota aqui para desativar a verificação de CSRF
    ];
    
}
