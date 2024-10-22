<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use App\Models\Fazer;
use Illuminate\Http\Request;

class FazerController extends Controller{

    public function store(Request $request){

     // $medico = Medico::where('cpf')->first();

        $fazer = Fazer::create([

            "cpf" => $request->cpf,
            "codigo" => $request->codigo,
            "medico_responsavel" => $request->medico_responsavel,
            "status" => $request->status,
            "data" => $request->data

        ]);

        return response()->json([
            
            'status'=>true,
            'message' => 'Relação criada com sucesso!',
            'fazer' => $fazer

        ],201);
    }

    public function index(){
        
    //  $fazer = Fazer::with(["medico","procedimentos"])->get(); 
        $fazer = Fazer::get();

        return response(["OK"], 200);
    }

    public function update(Request $request, $id){

        $fazer = Fazer::find($id);
        $fazer->update($request->only('data','status','medico_responsavel'));
        // $fazer = Fazer::where('cpf',$cpf)->where('codigo',$codigo)->firstOrFail();
        

        return response()->json([
            
            'status'=>true,
            'message' => 'Relação atualizada com sucesso!',
            'fazer' => $fazer

        ],201); 
    }


    public function delete($id){

        $fazer = Fazer::find($id);
        
        $fazer->delete();

        return response()->json([
            
            'status'=>true,
            'message' => 'Relação movida com sucesso!',
            'fazer' => $fazer

        ],201); 
        
    } 
}
