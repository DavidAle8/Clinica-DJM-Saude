<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Procedimento extends Model{
    
    protected $primaryKey = 'codigo';

    protected $fillable = [

        'status',
        'resultado',
        'tipo'
    ];

    public function equipamentos(){

        return $this->hasMany(Equipamento::class);

    }

    public function efeitos_colaterais(){

        return $this->hasMany(Efeito_colateral::class);

    }
    
    
}
