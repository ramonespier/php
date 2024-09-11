<?php

$produto = $_POST['produto'];
$desconto = $produto * 0.1;

$valorFinal = $produto - $desconto;

echo  "O produto custa R$ $produto e com o desconto de 10% ele custa R$ $valorFinal";

// $produto = $_POST['produto'];
// $desconto = $produto * 0.9;
// echo  "O produto custa R$ $produto e com o desconto de 10% ele custa R$ $desconto";

?>