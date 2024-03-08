<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("cadastro/usuario", function(Request $request){
   
    $Usuario = $request->input("Nome");
    return $Usuario;
});

Route::get("cadastro/dados", function(Request $request){

    $Dado1 = $request->input("nome");
    $Dado2 = $request->input("Idade");

    return 'Meu nome é ' . $Dado1 . ' ,tenho ' . $Dado2 . ' ' . 'anos de idade';
    

});

Route::get("cadastro/completo", function(Request $request){

    $nome = $request->input("Nome");
    $nasceu= $request->input("anoDeNascimento");
    $cidade = $request->input("CidadeNatal");

    return "Meu nome é " . $nome . ", nasci no ano 
    de " . $nasceu . ", na cidade de " . $cidade . ".";

});