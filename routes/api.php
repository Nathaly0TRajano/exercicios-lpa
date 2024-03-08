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

Route::get("calculadora/soma", function(Request $request){

    $primeiroNumero = $request->input("numero1");
    $segundoNumero = $request->input("numero2");
    $resultado = $primeiroNumero + $segundoNumero;
    return $resultado;

});

Route::get("calculadora/subtracao/tresnumeros", function(Request $request){

    $primeiroNumero = $request->input("numero1");
    $segundoNumero = $request->input("numero2");
    $terceiroNumero = $request->input("numero3");
    $resultado = ($primeiroNumero - $segundoNumero) - $terceiroNumero;

    return $resultado;

});

Route::get("calculadora/divisao", function(Request $request){
    $primeiroNumero = $request->input("numero1");
    $segundoNumero = $request->input("numero2");
    $resultado = $primeiroNumero / $segundoNumero;

    return $resultado;

});

Route::get("calculadora/multiplicacao", function(Request $request){
    $primeiroNumero = $request->input("numero1");
    $segundoNumero = $request->input("numero2");
    $resultado = $primeiroNumero * $segundoNumero;

    return $resultado;

});

Route::get("calcular/media", function(Request $request){
    $numero1 = $request->input("numero1");
    $numero2 = $request->input("numero2");
    $numero3 = $request->input("numero3");
    $numero4 = $request->input("numero4");
    $numero5 = $request->input("numero5");

    $Media = ($numero1 + $numero2 + $numero3 + $numero4 + $numero5)/5;
    return $Media;
});

Route::get("calcular/numeros", function(Request $request){
    $primeiroNumero = $request->input("primeiroNumero");
    $segundoNumero = $request->input("segundoNumero");

    $resultado = $segundoNumero / $primeiroNumero;
    return $resultado;
});

Route::get("calculo/dobro", function(Request $request){

    $primeiroNumero = $request->input("numero");
    $resultado = $primeiroNumero * 2;
    return "O dobro do numero " . $primeiroNumero . " é igual a: " . $resultado;

});

Route::get("calculando/area/retangulo", function(Request $request){
    $comprimento = $request->input("baseDoRetangulo");
    $altura = $request->input("alturaDoRetangulo");

    $resultado = $comprimento * $altura;
    return $resultado;

});

Route::get("produto/desconto", function(Request $request){
    $precoOriginal = $request->input("precoOriginal");
    $desconto = $request->input("valorDoDesconto");

    $resultado = ($precoOriginal * $desconto) / 100;
    return $resultado;


});

Route::get("salario/desconto", function(Request $request){
    $salario = $request->input("salarioAtual");
    $aumento = $request->input("porcentagemDeAumento");
    $conta1 = ($salario * $aumento) / 100;
    $resultado = ($salario + $conta1);

    return "O salario original é de" . $salario . ", com o aumento de " . $aumento . "%" . ", é igual a " . $resultado . ".";
});