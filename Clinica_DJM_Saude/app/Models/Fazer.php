<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Fazer extends Model {

    protected $table = 'fazer';
    protected $primaryKey = 'id';
    
    protected $fillable = [

        'cpf',
        'codigo',
        'medico_responsavel',
        'status',
        'data'
    ];

    public function medicos() {
        return $this->belongsTo(Medico::class, 'cpf', 'cpf');
    }

    public function procedimentos() {
        return $this->belongsTo(Procedimento::class, 'codigo', 'codigo');
    }

    // Método para definir a chave primária composta
    // public function getKey() {
    //     return [$this->attributes['cpf'], $this->attributes['codigo']];
    // }

    // public function setKeysForSaveQuery($query) {
    //     $query->where('cpf', $this->getAttribute('cpf'));
    //     $query->where('codigo', $this->getAttribute('codigo'));
    //     return $query;
    // }
}

