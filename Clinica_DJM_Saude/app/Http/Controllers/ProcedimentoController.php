<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Procedimento;

class ProcedimentoController extends Controller{

    public function store(Request $request){

        $procedimento = Procedimento::create([

            "codigo" => $request->codigo,
            "status" => $request->status,
            "resultado" => $request->resultado,
            "tipo" => $request->tipo,
            "descricao" => $request->descricao,
            "preparacao" => $request->preparacao
            
        ]);

        foreach($request->equipamentos as $equipamento){

            $procedimento->equipamentos()->create(['equipamento' => $equipamento]);

        }

        foreach($request->efeitos_colaterais as $efeito_colateral){

            $procedimento->efeitos_colaterais()->create(['efeito_colateral' => $efeito_colateral]);

        }

        return response(["OK"], 200);
    }

    public function index(){
        
        $procedimento = Procedimento::with(["equipamentos","efeitos_colaterais"])->get(); 

        return response();
    }

    public function update(Request $request){

        $procedimento = Procedimento::find($request->id);

        $procedimento->codigo = $request->codigo;
        $procedimento->status = $request->status;
        $procedimento->resultado = $request->resultado;
        $procedimento->tipo = $request->tipo;
        $procedimento->descricao = $request->descricao;
        $procedimento->preparacao = $request->preparacao;

        foreach($request->equipamentos as $equipamento){

            $procedimento->equipamentos()->create(["equipamento" => $equipamento]);

        }

        foreach($request->efeitos_colaterais as $efeito_colateral){

            $procedimento->efeitos_colaterais()->create(["efeito_colateral" => $efeito_colateral]);

        }

        $procedimento->save();

        return response("Tudo certo", 200);
    }


    public function delete(Request $request){

        $procedimento = Procedimento::find($request->id);

        $procedimento->delete();
        $procedimento->efeitos_colaterais()->delete;
        $procedimento->equipamentos()->delete;

        return response("procedimento",200);
        
    }  
}
