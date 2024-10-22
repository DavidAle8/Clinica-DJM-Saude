<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Procedimento;

class ProcedimentoController extends Controller{

    public function store(Request $request){

        $procedimento = Procedimento::create([

            "codigo" => $request->codigo,
            "status" => $request->status,
            "resultado" => $request->resultado,
            "tipo" => $request->tipo,
            "descricao" => $request->descricao,
            "preparacao" => $request->preparacao
            
        ]);

        return response()->json([
        
            'message' => 'Relação criada com sucesso!',
            'procedimento' => $procedimento 

        ],200);
    }

    public function index(){
        
        $procedimento = Procedimento::get(); 

        return response()->json([
        
            'message' => 'Relação criada com sucesso!',
            'procedimento' => $procedimento 

        ],200);

    }

    public function update(Request $request){

        $procedimento = Procedimento::find($request->id);

        $procedimento->codigo = $request->codigo;
        $procedimento->status = $request->status;
        $procedimento->resultado = $request->resultado;
        $procedimento->tipo = $request->tipo;
        $procedimento->descricao = $request->descricao;
        $procedimento->preparacao = $request->preparacao;

        $procedimento->save();

        return response()->json([
        
            'message' => 'Relação criada com sucesso!',
            'procedimento' => $procedimento 

        ],200);

    }


    public function delete(Request $request){

        $procedimento = Procedimento::find($request->id);

        $procedimento->delete();

        return response()->json([
        
            'message' => 'Relação criada com sucesso!',
            'procedimento' => $procedimento 

        ],200);
        
    }  
}
