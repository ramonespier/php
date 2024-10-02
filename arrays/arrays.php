<?php
function br() {
    echo "<br>";
}

// ======================= ARRAYS INDEXADOS E ASSOCIATIVOS =======================================//

$frutas = ["maçã", "banana", "laranja", "melancia", "kiwi"];  // array indexado

$usuario = [
    "nome" => "João",
    "idade" => 25,
    "email" => "joao@email.com"
];    // array associativo

echo $frutas[0], br(); // acessando o primeiro elemento do array indexado
echo $frutas[2], br();
echo $frutas[1], br();

echo br(), $usuario["nome"], br(); // acessando o valor do campo "nome"
echo $usuario["email"], br();
echo $usuario["idade"], br();

echo "<pre>";
print_r($frutas);
br();

print_r($usuario);
echo "</pre>";
br();

// ============================= FUNÇÕES ÚTEIS PARA ARRAYS ============================ //

echo count($frutas), br();  // retorna o número de elementos do array indexado
echo in_array("maçã", $frutas), br();  // verifica se um valor existe no array indexado
echo in_array("jabuticaba", $frutas), br();  // verifica se um valor existe no array indexado
echo array_push($frutas, "abacate"), br();  // adiciona um elemento ao final e o retorna do array indexado
echo array_pop($frutas), br();   // remove o último elemento do array indexado
echo array_shift($frutas), br();   // remove e retorna o primeiro elemento do array indexado


// =========================== ARRAYS MULTIDIMENSIONAIS ===================================== //
$aluno = [
    "nome" => "Coelho",
    "idade" => 19,
    "email" => "coelho@email.com",
    "notas" => [
        "Redes" => 2.5,
        "Sistemas Operacionais" => 7.0,
        "BackEnd" => 7.0,
        "FrontEnd" => 8.0,
        "Lógica de Programação" => 7.0,
        "Levantamento de Requisitos" => 7.0,
    ]
];

echo $aluno['notas']['BackEnd'], br();

echo '<pre>';
print_r($aluno);
echo '</pre>';


