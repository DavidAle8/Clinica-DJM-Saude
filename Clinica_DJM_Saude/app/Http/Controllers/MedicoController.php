<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use App\Models\Medico;

class MedicoController extends Controller{

    public function store(Request $request){

        $request->validate([
            
            'cpf' => 'required|integer|unique:medicos,cpf', // Verifica se o CPF é único na tabela de médicos
            'primeiro_nome' => 'required|string|max:45',
            'sobrenome' => 'required|string|max:45',
            'crm' => 'required|string|max:10|unique:medicos,crm', // Verifica se o CRM é único na tabela de médicos
            'area' => 'required|string|max:20',
            'salario' => 'required|numeric',
            'data_nascimento' => 'nullable|date',
            'sexo' => 'nullable|string|max:255',
        ]);

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
            
            'status'=>true,
            'message' => 'Relação criada com sucesso!',
            'medico' => $medico

        ],201);
    }

    public function index(){
        
        $medico = Medico::all(); 

     // return response(["OK"], 200);
    //  return response()->json(['aviso' => 'Usuário cadastrado com sucesso!'], 200);

        return response()->json([
            'status' => true,
            'message' => 'Relação criada com sucesso!',
            'medico' => $medico 
        ]);
    }

    public function update(Request $request, Medico $medico){

        // $medico = Medico::find($request->$cpf);

        // $medico->cpf = $request->cpf;
        // $medico->primeiro_nome = $request->primeiro_nome;
        // $medico->sobrenome = $request->sobrenome;
        // $medico->crm = $request->crm;
        // $medico->area = $request->area;
        // $medico->salario = $request->salario;
        // $medico->data_nascimento = $request->data_nascimento;
        // $medico->sexo = $request->sexo;

        // $medico->save();

        $request->validate([

            'cpf' => 'required|integer|unique:medicos,cpf,' . $medico->id, // Verifica se o CPF é único, ignorando o médico atual
            'primeiro_nome' => 'required|string|max:45',
            'sobrenome' => 'required|string|max:45',
            'crm' => 'required|string|max:10|unique:medicos,crm,' . $medico->id, // Verifica se o CRM é único, ignorando o médico atual
            'area' => 'required|string|max:20',
            'salario' => 'required|numeric',
            'data_nascimento' => 'nullable|date',
            'sexo' => 'nullable|string|max:255',
        ]);

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


        return response()->json([
            'status' => true,
            'message' => 'Médico atualizado com sucesso!',
            'medico' => $medico 

        ],200);

    }


    public function delete(Medico $medico){

        $medico->delete();

        return response()->json([
            'status' => true,
            'message' => 'Médico removido com sucesso!',
            'medico' => $medico

        ],200);    
    }  

}
