<?php

$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];

$media = ($nota1 + $nota2 + $nota3) / 3;

if ($media >= 7) {
    echo "Sua média é $media. Aprovado.";

} else if ($media == 6 ) {
    echo "Sua média é $media. Recuperação.";

} else {
    echo "Sua média é $media. Reprovado.";
}

