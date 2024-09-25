<?php
$html = "";



if(isset($_POST['saque'])) {
    $saque = $_POST['saque'];
    $saldo = 500;
    $saldo_restante = $saldo - $saque;

    if ($saque <= 500 && 0 < $saque) {
        if(($saque % 10) != 0) {        
            $html = "O valor do saque deve ser multiplo de 10. ";
    
        } else {
            $html = "O saldo restante é $saldo_restante.";
        }
    
    } else if ($saque > 500 || $saque < 0) {
        $html = "Saldo insuficiente. <br>
        Saldo disponível: $saldo";
    
    } else {
         $html = "Digite apenas números.";
    };

    $html .='<a class="home" href="/php/caixa-eletronico/processa-caixa.php">Voltar</a>';

} else {
    $html = '<section class="inputs">
        <div class="titulo">
            <h1>Login</h1>
        </div>

        <form action="processa-caixa.php" method="POST" class="section-form">

            <p style="color: aliceblue; padding: 8px;">Saldo atual: 500R$</p>
            <p style="color: aliceblue; padding: 8px;">Apenas temos notas de 10R$ e 20R$</p>

            <input class="nome-idade" type="number" name="saque" placeholder="Quanto deseja sacar?" min="10" required>
            <input class="enviar" type="submit" value="Enviar">

        </form>
    </section>';

}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Elêtronico</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<section class="secao-resposta">
        <div class="resposta">
            <?php
            echo $html;
            ?> 
        </div>
    </section>
</body>
</html>
