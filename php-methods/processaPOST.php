<?php

$html = "";

if(isset($_POST['nome'], $_POST['idade'])) {
    //Recebendo dados do método POST
    $html = "Ola, " . $_POST['nome'] . "! Você tem " . $_POST['idade'] . " anos.";

    $html .='<a class="home" href="/php/php-methods/processaPOST.php">Voltar</a>';

} else {
    $html = '    <section class="inputs">
        <div class="titulo">
            <h1>FORM POST</h1>
        </div>
        <form action="processaPOST.php" method="post" class="section-form">

            <input class="nome-idade" type="text" name="nome" placeholder="Nome" required><br>
            <input class="nome-idade" type="number" name="idade" placeholder="Idade" required><br>
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
    <title>POST</title>
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

