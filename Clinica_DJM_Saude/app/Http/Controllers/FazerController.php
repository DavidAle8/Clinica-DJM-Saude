<?php

namespace App\Http\Controllers;

use App\Models\Fazer;
use Illuminate\Http\Request;

class FazerController extends Controller{

    public function store(Request $request){

        $fazer = Fazer::create([

            "cpf" => $request->cpf,
            "codigo" => $request->codigo,
            "medico_responsavel" => $request->medico_responsavel,
            "status" => $request->status,
            "data" => $request->data

        ]);

        return response(["OK"], 200);
    }

    public function index(){
        
        $fazer = Fazer::with(["medico","procedimentos"])->get(); 

        return response(["OK"], 200);
    }

    public function update(Request $request, $cpf, $codigo){


        $fazer = Fazer::where('cpf',$cpf)->where('codigo',$codigo)->firstOrFail();
        $fazer->update($request->only('data','status','medico_responsavel'));

        return response("Tudo certo", 200); 
    }


    public function delete($cpf, $codigo){

  //    $fazer = Fazer::find($request->id);

        $fazer = Fazer::where('cpf',$cpf)->where('codigo',$codigo)->firstOrFail();
        
        $fazer->delete();

        return response("fazer",200);
        
    } 
}
