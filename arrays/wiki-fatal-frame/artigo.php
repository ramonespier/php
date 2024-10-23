<?php

require_once 'arrays-fatal.php';

// echo '<pre>';
$index = $_GET['index'];
// echo $index . '<br>'
// print_r($jogos[$index]);
// echo '</pre>';

$jogo = $jogos[$index];
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../fatal.css">
</head>

<body>
    <header>
        <nav class="menu-navegacao">
            <?php
            foreach ($navbar as $header) {
                foreach ($header as $nav) {
                    echo $nav;
                }
            };
            ?>
        </nav>
    </header>

    <span class="h3">
        <?php
        foreach ($jogos as $key => $jogo) {
            if ($key == $index) {
                echo "<li>", $jogo['nome'], "</li>";
            };
        };
        ?>
    </span>

    <div class="cointainer mt-5">
        <div class="card">
            <img src="" alt="" class="card-img-top">
            <div class="card-body">
                <?php
                    
                ?>
            </div>
        </div>
    </div>


</body>

</html>