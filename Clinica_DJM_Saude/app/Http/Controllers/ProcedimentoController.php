<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Procedimento;

class ProcedimentoController extends Controller{

    public function store(Request $request){

        $procedimento = Procedimento::create([

         //   "codigo" => $request->codigo,
            "status" => $request->status,
            "resultado" => $request->resultado,
            "tipo" => $request->tipo,
            "descricao" => $request->descricao,
            "preparacao" => $request->preparacao
            
        ]);

        return response()->json([

            'status'=>true,
            'message' => 'Relação criada com sucesso!',
            'procedimento' => $procedimento 

        ],200);
    }

    public function index(){
        
        $procedimento = Procedimento::all(); 

        return response()->json([
            
            'status'=>true,
            'message' => 'Relação criada com sucesso!',
            'procedimento' => $procedimento 

        ],200);

    }

    public function update(Request $request, Procedimento $procedimento){

        // $procedimento = Procedimento::find($request->id);

        // $procedimento->codigo = $request->codigo;
        // $procedimento->status = $request->status;
        // $procedimento->resultado = $request->resultado;
        // $procedimento->tipo = $request->tipo;
        // $procedimento->descricao = $request->descricao;
        // $procedimento->preparacao = $request->preparacao;

        // $procedimento->save();

        $data = $request->only([

            'codigo',
            'status',
            'resultado',
            'tipo',
            'descricao',
            'preparacao'

        ]);

        return response()->json([
            'status' => true,
            'message' => 'Relação criada com sucesso!',
            'procedimento' => $procedimento 

        ],200);

    }


    public function delete(Procedimento $procedimento){

        $procedimento->delete();

        return response()->json([
            'status' => true,
            'message' => 'Relação criada com sucesso!',
            'procedimento' => $procedimento 

        ],200);
        
    }  
}
