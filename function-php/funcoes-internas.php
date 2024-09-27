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
echo '<br>';

// a funçao 'strpos' compara a string de duas variaveis e localiza a posição dela
// sempre tendo em mente que a contagem começa a partir do zero (a = 0, b = 1, c = 2)
$posicao = strpos($string, $me_ache);
    if ($posicao === false) {
        echo "O texto $me_ache não foi encontrado em $string.";

    } else {
        echo "O texto $me_ache foi encontrado em $string; e está na posição $posicao.";
    }

echo '<br>';


// str_replace() substitui as palavras de uma frase.

$texto_replace = "Eu gosto de maçãs e laranjas.";
$procurar = array("maçãs", "laranjas");
$substituir = array("morangos", "abacates");

$resultado = str_replace($procurar, $substituir, $texto_replace);
echo '<br>';
echo $texto_replace, "<br>";
echo $resultado;
echo "<br>";

// A função round() é uma ferramenta útil para arredondar números em PHP. Você pode usá-la para controlar a precisão em cálculos e garantir que os resultados estejam formatados conforme necessário.


//Arredondar para o numero inteiro mais proximo
echo "<br>";
echo round(3.5), "<br>";
echo round(3.4), "<br>";
echo "<br>";

//Arredondar para duas casas decimais
echo round(3.14159, 2), "<br>";
echo round(3.14559, 2), "<br>";
echo "<br>";

// A função date() é usada para formatar datas e horas de acordo com um formato especificado. Ela permite que você exiba a data e hora atuais ou qualquer data específica que você queira formatar.


//hora atual
echo date("d-m-Y H:i:s");
echo "<br>";

//formato personalizado
echo date("d/m/Y");
echo "<br>";

// exibir apenas mes e ano
echo date("M/Y");
echo "<br>";
echo "<br>";

// A função is_numeric() traz uma resposta booleana, dizendo se o a variável é um numero ou não;
$n1 = 45;
$n2 = "kdncknk";
$n3 = "123";

echo is_numeric($n1);
echo "<br>";

echo is_numeric($n2);
echo "<br>";

echo is_numeric($n3);
echo "<br>";
echo "<br>";

$num1 = "123";
$num2 = "456.78";
$num3 = "abc123";

echo intval($num1); // Exibe: 123
echo "<br>";

echo intval($num2); // Exibe: 456 (a parte decimal é ignorada)
echo "<br>";

echo intval($num3); // Exibe: 0 (não é um número válido)
echo "<br>";
echo "<br>";

// a função floatval() é útil quando você precisa garantir que uma variável seja tratada como um número decimal, independentemente do seu tipo original.
$float1 = "123.45";
$float2 = "456.78abc";
$float3 = "abc456";

echo floatval($float1); // Exibe: 123.45
echo "<br>";
echo floatval($float2); // Exibe: 456.78 (parte não numérica é ignorada)
echo "<br>";
echo floatval($float3); // Exibe: 0 (não é um número válido)
echo "<br>";

?>
