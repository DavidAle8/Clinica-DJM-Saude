<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Efeito_colateral extends Model{

    protected $primaryKey = ['efeito_colateral', 'codigo'];

    protected $fillable = [

        'efeito_colateral',
        'codigo'
    ];

    public function procedimento(){

        return $this->belongsTo(Procedimento::class);

    }
}
