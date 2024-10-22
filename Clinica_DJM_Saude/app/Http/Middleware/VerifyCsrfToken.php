<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        
        'api/*',  // Exclui todas as rotas sob o prefixo 'api'
        'medicos', // Exclui a rota /medicos
        'procedimentos/*', // Exclui todas as rotas sob o prefixo procedimentos
    ];
}
