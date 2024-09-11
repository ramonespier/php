<?php

// NÃO (!) - PRIORIDADE ALTA
// E (&&) - PRIORIDADE MÉDIA
// OU (||) - PRIORIDADE BAIXA
// igual js

// operador E
$teste1 = 5 > 3 && 4 < 3;
echo "O teste1 é: $teste1 <br>";

// operador OU
$teste2 = 10 > 3 || 10 <= 3;
echo "O teste2 é: $teste2 <br>";

//operador NÃO
$teste3 = !(1 > 3);
echo "O teste3 é: $teste3 <br>";

$teste4 = 10 > 30 || 5 > 3 && !(1 > 3);
echo "O teste3 é: $teste4 <br>";

