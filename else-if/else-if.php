<?php
$hora = 19;
echo "A hora atual informada é: $hora <br>";

if ($hora <= 12) {
    echo "Bom dia!";

} else if ($hora < 18) {
    echo "Boa tarde!";

} else {
    echo "Boa noite!";
}