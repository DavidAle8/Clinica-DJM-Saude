<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model{

    protected $primaryKey = ['telefone','cpf'];

    protected $fillable = [

        'telefone',
        'cpf'
    ];

    public function medico(){

        return $this->belongsTo(Medico::class);

    }
}
