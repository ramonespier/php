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

    <div class="d-flex justify-content-evenly">
        <div class="cointainer mt-5">
            <div class="card">
                <div class="card-body d-flex flex-column align-items-center g-5 ">
                    <?php
                    foreach ($page as $key => $historia) {
                        if ($key == $index) {
                            foreach ($historia as $chave => $lore) {
                                if (isset($lore['p1'])) {
                                    echo '<div class="mb-5">';
                                    echo $lore['p1'];
                                    echo '</div>';

                                }
                                if (isset($lore['hp1'])) {
                                    echo '<div>';
                                    echo $lore['hp1'];
                                    echo '</div>';
                                }
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="cointainer mt-5">
            <div class="card">
                <div class="card-body d-flex flex-column align-items-center ">
                <?php
                    foreach ($page as $key => $historia) {
                        if ($key == $index) {
                            foreach ($historia as $chave => $lore) {
                                if (isset($lore['p2'])) {
                                    echo $lore['p2'];
                                }
                                if (isset($lore['hp2'])) {
                                    echo $lore['hp2'];
                                }
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="cointainer mt-5">
            <div class="card">
                <div class="card-body d-flex flex-column align-items-center h-100">
                <?php
                    foreach ($page as $key => $historia) {
                        if ($key == $index) {
                            foreach ($historia as $chave => $lore) {
                                if (isset($lore['p3'])) {
                                    echo $lore['p3'];
                                }
                                if (isset($lore['hp3'])) {
                                    echo $lore['hp3'];
                                }
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

</body>

</html>