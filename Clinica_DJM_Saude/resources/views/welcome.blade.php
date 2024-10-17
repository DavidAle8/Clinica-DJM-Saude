@extends('layouts.main')
@section('title','Clínica DJM Saúde')
    
@section('conteudo')
        
    <h1>Bem-Vindo Sistema de Saúde da Clínica DJM Saúde!</h1>

    <div class="botoes"> 

        <a href="/visualizar_cadastrados"> 

            <button id="visualizar">
                <p id="texto"> Visualizar cadastrados</p>
            </button>

        </a>

        <a href="/cadastro"> 

            <button id="cadastrar">
                <p id="texto"> cadastrar </p> 
            </button> 

        </a>

    </div>

@endsection