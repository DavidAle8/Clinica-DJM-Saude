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
}
