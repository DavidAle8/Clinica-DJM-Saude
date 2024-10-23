<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Procedimento;
use Illuminate\Support\Facades\DB;

class ProcedimentoController extends Controller{

    public function store(Request $request){

        DB::beginTransaction();

        $procedimento = Procedimento::create([

         //   "codigo" => $request->codigo,
            "status" => $request->status,
            "resultado" => $request->resultado,
            "tipo" => $request->tipo,
            "descricao" => $request->descricao,
            "preparacao" => $request->preparacao
            
        ]);

        DB::commit();

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


        DB::beginTransaction();

        $data = $request->only([

            'codigo',
            'status',
            'resultado',
            'tipo',
            'descricao',
            'preparacao'

        ]);

        if(!empty($data)){

            $procedimento->update($data);
        }

        DB::commit();

        return response()->json([

            'status' => true,
            'message' => 'Relação criada com sucesso!',
            'procedimento' => $procedimento 

        ],200);

    }


    public function destroy(Procedimento $procedimento){

        $procedimento->delete();

        return response()->json([

            'status' => true,
            'message' => 'Relação criada com sucesso!',
            'procedimento' => $procedimento 

        ],200);
        
    }  
}
