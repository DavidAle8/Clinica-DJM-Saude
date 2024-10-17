<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Email extends Model{
    
    protected $primaryKey = ['email', 'cpf'];

    protected $fillable = [

        'email',
        'cpf'
    ];
}