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

        foreach($request->emails as $email){

            $medico->emails()->create(['email' => $email]);

        }

        foreach($request->telefones as $telefone){

            $medico->telefones()->create(['telefone' => $telefone]);

        }

        return response(["OK"], 200);
    }

    public function index(){
        
        $medico = Medico::with(["emails","telefones"])->get(); 

        return response();
    }

    public function update(Request $request){

        $medico = Medico::find($request->id);

        $medico->cpf = $request->cpf;
        $medico->primeiro_nome = $request->primeiro_nome;
        $medico->sobrenome = $request->sobrenome;
        $medico->crm = $request->crm;
        $medico->area = $request->area;
        $medico->salario = $request->salario;
        $medico->data_nascimento = $request->data_nascimento;
        $medico->sexo = $request->sexo;

   //   $medico->emails()->delete;

        foreach($request->emails as $email){

            $medico->emails()->create(["email" => $email]);

        }

        foreach($request->telefones as $telefone){

            $medico->telefones()->create(["telefone" => $telefone]);

        }

        $medico->save();

        return response("Tudo certo", 200); 
    }


    public function delete(Request $request){

        $medico = Medico::find($request->id);

        $medico->delete();
        $medico->telefones()->delete;
        $medico->emails()->delete;

        return response("medico",200);
        
    }  

}
