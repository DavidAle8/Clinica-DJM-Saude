<?php

use Illuminate\Support\Facades\Route;

// Route::get('/',[...::class,'home']);
Route::get('/', function () {
    return view('welcome');
});



//php artisan serve - roda o servidor
//php artisan migrate - cria algumas tabelas base do laravel
//php artisan make:controller *nome do controller* - cria um controller
//php artisan migrate:status - olha os campos da tabela
//php artisan migrate:fresh - deleta todas as tabelas e roda as migrates novamente (cuidado para não apagar dados já existentes) (Faz isso quando vc coloca novos campos na tabela, pois ele atualiza a tabela)
//php artisan migrate:rollback - Pode remover um campo da tabela
//php artisan migrate:reset - desfaz as migrations
//php artisan migrate:refresh - Faz rodar todas as migratios novamente. Faz o rollback e migrate logo sem seguida
//php artisan make:migration create_events_table - cria uma tabela. Neste caso "events_table" é o nome da tabela
//php artisan migrate:status - vê o status das migrations ou da tabela
//php artisan make:add_*nome do campo que deseja adicionar na tabela*_to_*tabela qual vai ter o campo adicionado dentro dela*