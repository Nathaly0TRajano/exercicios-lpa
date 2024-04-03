<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;

Route::get("cadastro/usuario", function(Request $request){
   
    $Usuario = $request->input("nome");
    return $Usuario;
});

Route::get("cadastro/dados", function(Request $request){

    $dado1 = $request->input("nome");
    $dado2 = $request->input("Idade");

    return 'Meu nome é ' . $dado1 . ' ,tenho ' . $dado2 . ' ' . 'anos de idade';
    

});

Route::get("cadastro/completo", function(Request $request){

    $nome = $request->input("nome");
    $nasceu= $request->input("anoDeNascimento");
    $cidade = $request->input("cidadeNatal");

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

    return "O salario original é de ~~" . $salario . ", com o aumento de " . $aumento . "%" . ", é igual a " . $resultado . ".";
});

Route::get("pontos/recompensa", function(Request $request){
    $compra  = $request->input("valorDaCompra");
    $contaUm =  ($compra * 1) / 10;
    return $contaUm;
});

Route::get("valor/comissao", function(Request $request){

    $valor = $request->input("valorTotaldasCompras");
    $comissao = ($valor * 5) / 100;
    return $comissao;

});

Route::get("dias/horas/minutos/segundos", function(Request $request){
    $dias = $request->input("dias");
    $horas = ($dias * 24) /1;
    $minutos = ($horas * 60) /1; 
    $segundo = ($minutos * 60) / 1;

    return $dias . " em horas " . $horas . ", em minutos " . $minutos . ", em segundos " . $segundo;

});

Route::get("quantidade/compra", function(Request $request){
    $valor = $request->input("valorDaCompra");
    $quantidade = $request->input("quantidadeComprada");
    $resultado = $valor * $quantidade;

    return $resultado;
});

Route::get('exemplo/condicao', function(Request $request){
    $idade = $request->input("idade");
    $retorno = "";
    if($idade >= 18){ 
        $retorno = "Maior de idade";
    }
    else {
        $retorno = "Menor de idade";
    }

    return $retorno;
});

Route::get('verificar/idade', function(Request $request){
    $idade = $request->input('idade');
    if ($idade >= 18) { 
        return "maior de idade";
    } else {
        return "menor de idade";
    }
});

Route::get('verificar/impar/par', function(Request $request){
    $numero = $request->input('numero');
    if($numero % 2 == 0) {
        return "par";
    } else {
        return "impar";
    }

});

Route::get("numero/maior/dez", function(Request $request){
    $numero = $request->input("numero");
    if ($numero > 10) {
        return "O número é maior que dez";
    }

    else {
        return "O número é menor que dez";
    }
});

Route::get("graus", function(Request $request){
    $graus = $request->input("temperaturaAtual?");
    if ($graus > 30) {
        return "Está quente";
    }
});

Route::get("numero/positivo/negativo/zero", function (Request $request){
    $numero = $request->input("numero");
    if ($numero > 0) {
        return "O numero informado é positivo";
    }elseif ($numero < 0){
        return "O numero informado é negativo";

    } else {
        return "O numero informado é zero";
    } 

});

Route::get("maior/numero", function (Request $request){
    $primeiroNumero = $request->input("primeroNumero");
    $segundoNumero = $request->input("segundoNumero");
    if ($primeiroNumero > $segundoNumero) {
        return $primeiroNumero . " é maior";
    } else {
        return $segundoNumero . "é maior";
    }
    
});

Route::get("divisivel/tres", function (Request $request){
    $numero = $request->input("numero");
    if ($numero % 3 == 0) {
        return "o número é divisível por três";
    } else {
        return "o número não é divisível por três";
    }
}); 

Route::get("lista/exercicio/um", function(Request $request){
    $numero = $request->input("numero");
    if ($numero > 10) {
        return "O número é maior que dez";
    }

    else {
        return "O número é menor que dez";
    }
});

Route::get("lista/exercicio/dois", function (Request $request){
    $numero = $request->input("numero");
    if ($numero > 0) {
        return "Este número é positivo";
    } else if ($numero == 0) {
        return "Este número é zero";
    } else {
        return "Este número é negativo";
    }
});

Route::get("lista/exercicio/tres", function(Request $request){
    $idade = $request->input("insiraIdade");
    if ($idade >= 18) {
        return "Você é maior de idade";
    } else {
        return "Você é menor de idade";
    }
});

Route::get("lista/exercicio/quatro", function(Request $request){
    $number = $request->input("numero");
    if ($number % 2 == 0) {
        return "O número é par";
    } else {
        return "O número é ímpar";
    }
});

Route::get("lista/exercicio/cinco", function(Request $request){
    $primeiroNumero = $request->input("primeroNumero");
    $segundoNumero = $request->input("segundoNumero");
    if ($primeiroNumero > $segundoNumero) {
        return $primeiroNumero . " é maior";
    } else {
        return $segundoNumero . " é maior";
    }
});

Route::get("lista/exercicios/seis", function(Request $request){
    $numero = $request->input("number");
    if ($numero % 9 == 0) {
        return "Este número é divisível por nove";
    } else {
        return "Este número não é divisível por nove";
    }
});

Route::get("lista/exercicio/sete", function(Request $request){
    $graus = $request->input("temperaturaAtual");
    if ($graus > 30) {
        return "Está quente";
    } else {
        return "Não está quente";
    }
});

Route::get("lista/exercicios/oito", function(Request $request){
    $numero = $request->input("insiraNumero");
    if ($numero % 7 == 0) {
        return "Este número é multiplo de sete";
    } else {
        return "Este número não é multilpo de sete";
    }
});

Route::get("lista/exercico/nove", function(Request $request){
    $idade = $request->input("idade");
    if ($idade <= 12) {
        return "Você é uma criança";
    } else {
        return "Você não é uma criança";
    }
});

Route::get("lista/exercicio/dez", function(Request $request){
    $numero = $request->input("numero");
     if ($numero > 0 ) {
     if ($numero % 2 > 0) {
        return "é impar e positivo";
     }} else {
        return "O número não é positivo nem ímpar";
     }
});

Route::get("lista/exercicio/onze", function(Request $request){
    $numero = $request->input("numero");
    if ($numero == 100) {
        return "O número é igual a 100";
    } else if ($numero > 100) {
        return "O número é maior que 100";
    } else {
        return "O número é menor que 100";
    }
});
Route::get("lista/exercicio/doze", function(Request $request){
    $numero = $request->input("numero");
    if ($numero % 6 == 0) {
        return "Este número é divisível por seis";
    } else {
        return "Este número não é divisível por seis";
    }
});


Route::get("lista/exercicio/treze", function(Request $request){
    $nomeUsuario = $request->input("nome");
    if ($nomeUsuario == "Alice") {
        return "Olá Alice!";
    } 
});

Route::get("lista/exercicio/catorze", function(Request $request){
    $idade = $request->input("idade");
    $carteira = $request->input("temCarteiraDeMotorista");
    if ($idade >= 18) {
    if ($carteira == "Sim") 
            return "Você pode dirigir";
    }
     else {
        return "Você não pode dirigir";
    }
});

Route::get("lista/exercicio/dezesseis", function(Request $request){
    $primeiroNumero = $request->input("primeiroNumero");
    $segundoNumero = $request->input("segundoNumero");
    if ($primeiroNumero < $segundoNumero) {
        return " O " . $primeiroNumero . " é menor" ;
    } else if ($segundoNumero < $primeiroNumero ) {
        return " O " . $segundoNumero . " é menor";
    }
    else {
        return "nenhum é menor";
    }
});

Route::get("lista/exercicios/dezessete", function(Request $request){
$nome = $request->input("nome");
$idade = $request->input("idade");
if ($idade >= 18) {
    return "Você é maior de idade " . ", " . $nome; 
} else {
    return "Você é menor de idade" . ", " . $nome;
}
});

Route::get("lista/exercicios/dezoito", function(Request $request){
    $primeiroNumero = $request->input("primeiroNumero");
    $segundoNumero = $request->input("segundoNumero");
    
    if ($primeiroNumero == 0) {
        return "não é possível efetuar a divisão pois o primeiro número é zero";
    } else if ($segundoNumero == 0) {
        return "não é possível efetuar a divisão pois o segundo número é zero";
    } else {
        $conta = $primeiroNumero / $segundoNumero;
        return $conta;
    }
});

Route::get("lista/exercicios/dezenove", function(Request $request){
    $primeiroNumero = $request->input("primeiroNumero");
    $segundoNumero = $request->input("segundoNumero");
    $resultado = $primeiroNumero * $segundoNumero;
    if ($resultado > 100) {
        return "O resultado é maior que 100";
    }
    else {
        return "O resultado é menor que 100";
    }
});

Route::get("lista/exercicios/vinte", function(Request $request){
    $primeiroNumero = $request->input("primeiroNumero");
    $segundoNumero = $request->input("segundoNumero");
    $resultadoConta = $primeiroNumero + $segundoNumero;
    if ($resultadoConta % 2 == 0) {
        $conta = $primeiroNumero * $segundoNumero;
        return $conta;
    } else {
        $contaDiv = $primeiroNumero / $segundoNumero;
        return $contaDiv;
    }
});
