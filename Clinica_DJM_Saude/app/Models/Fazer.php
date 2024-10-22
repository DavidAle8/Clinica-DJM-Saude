<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Fazer extends Model{

    protected $primaryKey = ['cpf','codigo'];

    protected $fillable = [

        'cpf',
        'codigo',
        'medico_responsavel',
        'status',
        'data'
    ];

    public function medicos(){

        return $this->belongsTo(Medico::class,'cpf','cpf');
    }

    public function procedimentos(){

        return $this->belongsTo(Procedimento::class,'coedigo','coedigo');
    }
}

