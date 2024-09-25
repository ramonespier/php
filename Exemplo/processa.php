<?php

$html = "";

if(isset($_POST['nota1'], $_POST['nota2'], $_POST['nota3'])) {

    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    
    $media = ($nota1 + $nota2 + $nota3) / 3;
    $formatado = number_format($media, 2);
    
    if ($media >= 7) {
        $html = "Sua média é $formatado (Aprovado).";
    
    } else if ($media == 6 ) {
        $html = "Sua média é $formatado (Recuperação).";
    
    } else {
        $html = "Sua média é $formatado (Reprovado).";
    }

    $html .='<a class="home" href="/php/exemplo/processa.php">Voltar</a>';

} else {
    $html = '<section class="inputs">
    <div class="titulo">
        <h1>Nota média</h1>
    </div>

    <form action="processa.php" method="post" class="section-form">
        <input class="nome-idade" type="number" name="nota1" min="0" placeholder="Digite sua primeira nota."
            required>
        <input class="nome-idade" type="number" name="nota2" min="0" placeholder="Digite sua segunda nota."
            required>
        <input class="nome-idade" type="number" name="nota3" min="0" placeholder="Digite sua terceira nota."
            required>
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
    <title>Nota média</title>
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


