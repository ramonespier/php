<?php
function br() {
    echo "<br>";
}

// ======================= ARRAYS INDEXADOS E ASSOCIATIVOS =======================================//

$frutas = ["maçã", "banana", "laranja", "melancia", "kiwi", "maçã"];  // array indexado

// array associativo

$numeros = [
    "um" => 1,
    "dois" => 2,
    "três" => 3
];

$usuario = [
    "nome" => "João",
    "idade" => 25,
    "email" => "joao@email.com"
];    

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

$chaves = array_keys($frutas);
$chaves_valor = array_keys($frutas, "maçã");
$chave_rigorosa = array_keys($numeros, "1", true);

echo "<pre>";

print_r($chaves); // acessando a chave do primeiro elemento do array indexado
br();
print_r($chaves_valor); // mostrará apenas as chaves que têm o valor "maçã"
br();
print_r($chave_rigorosa); // retorna um array vazio, pois 1 é um int e '1' é um string
br();

$values = array_values($numeros);
print_r($values); // o print_r mostrará um novo array contendo apenas os valores do array original, que neste caso seria [1, 2, 3]
br();

sort($numeros); // a funcao sort() ordena tudo em ordem ascendente
sort($frutas);
print_r($numeros) . br();
print_r($frutas) . br();

rsort($numeros); // ja a funcao rsort(), ordena de forma descendente
rsort($frutas);
print_r($numeros) . br();
print_r($frutas) . br();
echo "</pre>";


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


