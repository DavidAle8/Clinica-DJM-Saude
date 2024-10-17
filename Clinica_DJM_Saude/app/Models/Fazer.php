<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fazer extends Model{

    protected $primaryKey = ['cpf','codigo'];

    protected $fillable = [

        'cpf',
        'codigo',
        'medico_responsavel',
        'status',
        'data'
    ];
}
