<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use App\Models\Medico;
use Illuminate\Support\Facades\DB;

class MedicoController extends Controller{

    public function store(Request $request){

        DB::beginTransaction();

        $medico = Medico::create([

            "cpf" => $request->cpf,
            "primeiro_nome" => $request->primeiro_nome,
            "sobrenome" => $request->sobrenome,
            "crm" => $request->crm,
            "area" => $request->area,
            "salario" => $request->salario,
            "data_nascimento" => $request->data_nascimento,
            "sexo" => $request->sexo
            
        ]);

        DB::commit();

        return response()->json([
            
            'status'=>true,
            'message' => 'Relação criada com sucesso!',
            'medico' => $medico

        ],201);
    }

    public function index(){
        
        $medico = Medico::all(); 

        return response()->json([

            'status' => true,
            'message' => 'Relação criada com sucesso!',
            'medico' => $medico 
        ]);
    }

    public function update(Request $request, Medico $medico){

        DB::beginTransaction();

        $dados = $request->only([
            
          'cpf',
          'primeiro_nome' ,
          'sobrenome',
          'crm' ,
          'area',
          'salario',
          'data_nascimento',
          'sexo' 

        ]);

        if(!empty($dados)){

            $medico->update($dados);

        }

        DB::commit();

        return response()->json([

            'status' => true,
            'message' => 'Médico atualizado com sucesso!',
            'medico' => $medico 

        ],200);

    }


    public function destroy(Medico $medico){

        $medico->delete();

        return response()->json([

            'status' => true,
            'message' => 'Médico removido com sucesso!',
            'medico' => $medico

        ],200);    
    }  

}
