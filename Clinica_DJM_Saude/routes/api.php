<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MedicoController;
use App\Http\Controllers\ProcedimentoController;
use App\Http\Controllers\FazerController;

Route::post('/medicos',[MedicoController::class, 'store']);
Route::get('/medicos',[MedicoController::class, 'index']);
Route::put('/medicos/{cpf}',[MedicoController::class, 'update']); // http://127.0.0.1:8000/medicos/put/7663314741
Route::delete('/medicos/{cpf}',[MedicoController::class, 'delete']);

Route::post('/procedimentos',[ProcedimentoController::class, 'store']);
Route::get('/procedimentos',[ProcedimentoController::class, 'index']);
Route::put('/procedimentos/{cpf}',[ProcedimentoController::class, 'update']);
Route::delete('/procedimentos/{cpf}',[ProcedimentoController::class, 'delete']);

Route::get('/fazer', [FazerController::class, 'index']);
Route::post('/fazer', [FazerController::class, 'store']);
Route::put('/fazer/{cpf}/{codigo}', [FazerController::class, 'update']);
Route::delete('/fazer/{cpf}/{codigo}', [FazerController::class, 'destroy']);


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



//php artisan serve - roda o servidor
//php artisan migrate - cria algumas tabelas base do laravel
//php artisan make:controller *nome do controller* - cria um controller
//php artisan migrate:status - olha os campos da tabela
//php artisan migrate:fresh - deleta todas as tabelas e roda as migrates novamente (cuidado para não apagar dados já existentes) (Faz isso quando vc coloca novos campos na tabela, pois ele atualiza a tabela)
//php artisan migrate:rollback - Pode remover um campo da tabela
//php artisan migrate:reset - desfaz as migrations
//php artisan migrate:refresh - Faz rodar todas as migratios novamente. Faz o rollback e migrate logo em seguida
//php artisan make:migration create_events_table - cria uma tabela. Neste caso "events_table" é o nome da tabela
//php artisan migrate:status - vê o status das migrations ou da tabela
//php artisan make:add_*nome do campo que deseja adicionar na tabela*_to_*tabela qual vai ter o campo adicionado dentro dela*
//