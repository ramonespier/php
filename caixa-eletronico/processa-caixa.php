<?php

$saque = $_POST['saque'];
$saldo = 500;
$saldo_restante = $saldo - $saque;

if ($saque <= 500 && 0 < $saque) {
    if(($saque % 10) != 0) {        
        echo "O valor do saque deve ser multiplo de 10. ";
        
        } else {
            echo "O saldo restante é $saldo_restante.";

    }

}else {
    echo "Digite apenas números.";
    }



