<?php

$texto = "Olá, mundo!";
$texto_maiusculo = "OLÁ, MUNDO!";

$string = "abcde";
$me_ache = "c";

// $comprimento = strlen("Hello World!");
$comprimento = strlen($texto);
echo $comprimento;
echo '<br>';

$subtexto = substr($texto, 7, 5);
echo $subtexto;
echo '<br>';

// deixa a string com letras maiusculas (menos acentos/caracteres especiais)
$maiusculo = strtoupper($texto);
echo $maiusculo;
echo '<br>';

// deixa a string totalmente maiuscula
$maiusculo_de_verdade = mb_strtoupper($texto);
echo $maiusculo_de_verdade;
echo '<br>'; 

// deixa a string com letras minusuculas (menos acentos/caracteres especiais)
$minusculo = strtolower($texto_maiusculo);
echo $minusculo;
echo '<br>'; 

// deixa a string totalmente minuscula
$minusculo_de_verdade = mb_strtolower($texto_maiusculo);
echo $minusculo_de_verdade;
echo '<br>';

// a funçao 'strpos' compara a string de duas variaveis e localiza a posição dela
// sempre tendo em mente que a contagem começa a partir do zero (a = 0, b = 1, c = 2)
$posicao = strpos($string, $me_ache);
    if ($posicao === false) {
        echo "O texto $me_ache não foi encontrado em $string.";

    } else {
        echo "O texto $me_ache foi encontrado em $string; e está na posição $posicao.";
    }

