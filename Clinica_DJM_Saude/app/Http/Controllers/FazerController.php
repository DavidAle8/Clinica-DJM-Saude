<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use App\Models\Fazer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FazerController extends Controller{

    public function store(Request $request){
        DB::beginTransaction();
    
        $validatedData = $request->validate([
            
            'cpf' => 'required|integer',
            'codigo' => 'required|integer',
            'medico_responsavel' => 'required|string|max:45',
            'status' => 'required|string|max:15',
            'data' => 'required|date'
        ]);
    
        // Verifica se a relação já existe
        $exists = Fazer::where('cpf', $validatedData['cpf'])
                        ->where('codigo', $validatedData['codigo'])
                        ->first();
    
        if ($exists) {
            return response()->json([
                'status' => false,
                'message' => 'Relação já existe!',
            ], 409); // 409 Conflict
        }
    
        // Cria a nova relação
        $fazer = Fazer::create($validatedData);
    
        DB::commit();
    
        return response()->json([
            'status'=>true,
            'message' => 'Relação criada com sucesso!',
            'fazer' => $fazer
        ], 201);
    }
    
    

    public function index(){
 
        $fazer = Fazer::all();

        return response()->json([
            
            'status'=>true,
            'message' => 'Amostra dos procedimentos feitos',
            'fazer' => $fazer

        ],201);
    }

    public function update(Request $request, $id){

        DB::beginTransaction();

        $fazer = Fazer::find($id);

        $validatedData = $request->validate([

            'cpf' => 'required|integer',
            'codigo' => 'required|integer',
            'medico_responsavel' => 'required|string|max:45',
            'status' => 'required|string|max:15',
            'data' => 'required|date'
            
        ]);

        $fazer->update($validatedData);
        // $fazer = Fazer::where('cpf',$cpf)->where('codigo',$codigo)->firstOrFail();
        
        DB::commit();

        return response()->json([
            
            'status'=>true,
            'message' => 'Relação atualizada com sucesso!',        
            'fazer' => $fazer

        ],201); 
    }


    public function destroy($id){

        $fazer = Fazer::find($id);
        
        $fazer->delete();

        return response()->json([
            
            'status'=>true,
            'message' => 'Relação movida com sucesso!',
            'fazer' => $fazer

        ],201); 
        
    } 
}
