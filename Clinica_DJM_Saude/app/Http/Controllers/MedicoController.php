<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use App\Models\Medico;

class MedicoController extends Controller{

    public function store(Request $request){

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

    //    return response(["OK"], 200);
    //    return response(["OK"], 200)->json('Relação criada com sucesso!');
        return response()->json([

            'message' => 'Relação criada com sucesso!',
            'medico' => $medico
        ],200);
    }

    public function index(){
        
        $medico = Medico::get(); 

     // return response(["OK"], 200);
    //  return response()->json(['aviso' => 'Usuário cadastrado com sucesso!'], 200);

        return response()->json([
            'message' => 'Relação criada com sucesso!',
            'medico' => $medico 
        ]);
    }

    public function update(Request $request, Medico $cpf){

        $medico = Medico::find($request->$cpf);

        $medico->cpf = $request->cpf;
        $medico->primeiro_nome = $request->primeiro_nome;
        $medico->sobrenome = $request->sobrenome;
        $medico->crm = $request->crm;
        $medico->area = $request->area;
        $medico->salario = $request->salario;
        $medico->data_nascimento = $request->data_nascimento;
        $medico->sexo = $request->sexo;

        $medico->save();

      //  return response("Tudo certo", 200); 
        return response()->json([
            
            'message' => 'Relação atualizada com sucesso!',
            'medico' => $medico 

        ],200);

    }


    public function delete(Request $request){

        $medico = Medico::find($request->id);

        $medico->delete();

        return response()->json([
        
            'message' => 'Relação removida com sucesso!',
            'medico' => $medico

        ],200);
          
        
    }  

}
