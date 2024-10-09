<?php

function br()
{
    echo "<br>";
}

$frutas = ["maracujá", "banana", "maçã", "laranja", "morango"];

$usuario = [
    "Nome " => "Ramon",
    "Idade " => 19,
    "Email " => "coelho@email.com"
];

$aluno = [
    "Nome" => "Coelho",
    "Idade" => 19,
    "Email" => "coelho@email.com",
    "Notas" => [
        "Redes" => 2.5,
        "Sistemas Operacionais" => 7.0,
        "BackEnd" => 7.0,
        "FrontEnd" => 8.0,
        "Lógica de Programação" => 7.0,
        "Levantamento de Requisitos" => 7.0,
    ]
];

//  INDEXADO
echo "<ul>";
foreach ($frutas as $fruta) {
    echo "<li>$fruta</li>";
}
echo "</ul>";

// ASSOCIATIVO
echo "<table border=6>";
foreach ($usuario as $chave => $valor) {
    echo "<tr>
    <td>$chave</td>
    <td>$valor</td>
    </tr>";
}
echo "</table>";

// MULTIDIMENSIONAL
foreach ($aluno as $chave => $valor) {
    if (is_array($valor)) {
        echo "$chave:" . br();
        foreach ($valor as $disciplina => $nota) {
            echo "$disciplina: $nota" . br();
        }
    } else {
        echo "$chave: $valor" . br();
    }
}

$produtos = [
    [
        "nome" => "Coca-Cola ↓",
        "preco" => 'R$6'
    ],
    [
        "nome" => "Guaraná ↓",
        "preco" => 'R$5'
    ]
];

foreach($produtos as $produto) {
    echo "<div class='card'>";
    echo "<h4>" . $produto['nome'] . "</h4>";
    echo "<p>" . $produto["preco"] . "</p>";
    echo "</div>";

}
    

