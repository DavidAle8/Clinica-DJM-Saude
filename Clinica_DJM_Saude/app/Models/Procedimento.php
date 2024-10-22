<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Procedimento extends Model{
    
    protected $primaryKey = 'codigo';

    // Desativa os timestamps automáticos
    public $timestamps = false;

    protected $fillable = [
        
        'status',
        'resultado',
        'tipo',
        'descricao',
        'preparacao'
    ];
}
