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

    public function update(Request $request, $id){

        $medico = $request->validate([

            'cpf' => 'required|string|max:14',
            'primeiro_nome' => 'required|string|max:45',
            'sobrenome' => 'required|string|max:45',
            'crm' => 'required|string|max:5',
            'area' => 'required|string|max:20',
            'salario' => 'required|float',
            'data_nascimento' => 'required|date',
            'sexo' => 'required|char|max:1',

        ]);

        $novoMedico = Medico::findOrFail($id);
        $novoMedico->update($medico);
        
        return redirect()->route();
    }

    public function destroy($id){

        $medico = Medico::findOrFail($id);

        $medico->delete();

        return redirect()->route();
    }  

}
