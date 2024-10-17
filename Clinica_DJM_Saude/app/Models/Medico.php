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
}