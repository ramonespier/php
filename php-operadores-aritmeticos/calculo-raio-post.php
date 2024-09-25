<?php
$html = "";

if(isset($_POST['raio'])) {
    define("PI", 3.14);
    
    $raio = $_POST['raio'];
    $perimetro = 2 * PI * $raio;
    $area = PI * ($raio**2);
    
    $html = "O perimêtro é $perimetro e a área é $area m²";

    $html .='<a class="home" href="/php/php-operadores-aritmeticos/calculo-raio-post.php">Voltar</a>';

} else {
    $html = '<section class="inputs">
        <div class="titulo">
            <h1>CALCULO DE RAIO</h1>
        </div>
        
        <form action="calculo-raio-post.php" method="POST" class="section-form">

            <input class="nome-idade" type="number" name="raio" placeholder="Insira o raio" min="0" required><br>
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
    <title>Calcular raio</title>
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