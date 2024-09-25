<?php

function calcularAreaQuadrado($lado) {

    $area = $lado * $lado;
    return "A área do quadrado é: $area m² <br>";
}

$ladoQuadrado = 32;

echo calcularAreaQuadrado(10);
echo calcularAreaQuadrado(9);
echo calcularAreaQuadrado(8);
echo calcularAreaQuadrado(7);
echo calcularAreaQuadrado(6);
echo calcularAreaQuadrado(5);
echo calcularAreaQuadrado(4);
echo calcularAreaQuadrado(3);
echo calcularAreaQuadrado(2);
echo calcularAreaQuadrado($ladoQuadrado);

?>
