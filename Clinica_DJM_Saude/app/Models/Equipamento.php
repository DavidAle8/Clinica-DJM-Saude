<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model{

    
    protected $primaryKey = ['equipamento','codigo'];

    protected $fillable = [

        'equipamento',
        'codigo'
    ];

    public function procedimento(){

        return $this->belongsTo(Procedimento::class);

    }
}
