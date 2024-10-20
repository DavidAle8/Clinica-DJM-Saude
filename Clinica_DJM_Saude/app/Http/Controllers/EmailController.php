<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Email;

class EmailController extends Controller{

    public function store(Request $request){

        $request->validate([

            'email' => 'required|email',
            'cpf' => 'required|exists:medicos,cpf',
        ]);

        $email = Email::create([

            "email" => $request->email,
            "cpf" => $request->cpf,
            
        ]);


        return response(["message" => "Email cadastrado com sucesso!"], 200);
    }

    public function index()
    {
        // Carrega todos os emails com os dados do médico associado
        $emails = Email::with('medico')->get();

        return response($emails, 200);
    }

    public function update(Request $request){

        // Validação de entrada
        $request->validate([

            'email' => 'required|email',
            'cpf' => 'required|exists:medicos,cpf',
        ]);

        // Busca e atualiza o email existente
        $email = Email::findOrFail($request->id);
        $email->email = $request->email;
        $email->cpf = $request->cpf;
        $email->save();

        return response(["message" => "Email atualizado com sucesso!"], 200);
    }


    public function delete(Request $request){
        
        // Busca e deleta o email pelo id
        $email = Email::findOrFail($request->id);
        $email->delete();

        return response(["message" => "Email deletado com sucesso!"], 200);
    } 
}
