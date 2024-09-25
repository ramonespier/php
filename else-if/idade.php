<?php
$html = "";

if (isset($_POST['idade'])) {
    
    $idade = $_POST ['idade'];

    if ($idade >= 100) {
        $html = "Claramente mentira.";
    }

    else if ($idade >= 60) {
        $html = "Você é idoso!";

    } else if ($idade >= 18) {
        $html = "Você é adulto!";
        
    } else if ($idade >= 12) {
        $html = "Você é adolescente!";
        
    } else if ($idade >= 4) {
        $html = "Você é criança!";

    } else if ($idade >= 1) {
        $html = "Você é um bebê!";

    } else if ($idade >= 0){
        $html = "Você é recém-nascido!";
        
    } else {
        $html = "Digite um valor válido";
    }

    $html .='<a class="home" href="/aulas-php-1md/php/else-if/idade.php">Voltar</a>';

} else {
    $html = 
    '<section class="inputs">
        <div class="titulo">
            <h1>É de menor?</h1>
        </div>
        
        <form action="idade.php" method="POST" class="section-form">
            
            <input class="nome-idade" type="number" name="idade" placeholder="Digite a sua idade:" min="0" required>
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
    <title>Classificação de idade</title>
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
