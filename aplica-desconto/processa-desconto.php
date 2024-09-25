<?php
$html = "";

if(isset($_POST['produto'])) {
    $produto = $_POST['produto'];
    $desconto = $produto * 0.1;
    
    $valorFinal = $produto - $desconto;
    
    $html =  "O produto custa R$ $produto e com o desconto de 10% ele custa R$ $valorFinal";

    $html .='<a class="home" href="/php/aplica-desconto/processa-desconto.php">Voltar</a>';

} else {
    $html = '<section class="inputs">
        <div class="titulo">
            <h1>Produtos com 10% de desconto</h1>
        </div>
        
        <form action="processa-desconto.php" method="POST" class="section-form">

            <input class="nome-idade" type="number" name="produto" placeholder="Insira o valor do produto" min="0" required><br>
            <input class="enviar" type="submit" value="Enviar">

        </form>
    </section>';
}


// $produto = $_POST['produto'];
// $desconto = $produto * 0.9;
// echo  "O produto custa R$ $produto e com o desconto de 10% ele custa R$ $desconto";

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos com desconto</title>
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