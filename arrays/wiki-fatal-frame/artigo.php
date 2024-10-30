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
    <title>Fatal Frame</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./fatal.css">
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

    <div class="d-flex justify-content-center mt-2">
        <span class="h3">
            <?php
            foreach ($jogos as $key => $jogo) {
                if ($key == $index) {
                    echo "<li>", $jogo['nome'], "</li>";
                };
            };
            ?>
        </span>
    </div>


    <div class="d-flex justify-content-between">
        <div class="container mt-5">
            <div class="card">
                <div class="card-body d-flex flex-column align-items-center g-5 ">
                    <?php
                    foreach ($page as $key => $historia) {
                        if ($key == $index) {
                            foreach ($historia as $chave => $lore) {
                                if (isset($lore['p1'])) {
                                    echo '<div class="mb-5">';
                                    echo "<img src='./img/" . $lore['p1'] . "'class='img-fluid' width='250px'></img>";
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
        <div class="container mt-5">
            <div class="card">
                <div class="card-body d-flex flex-column align-items-center ">
                    <?php
                    foreach ($page as $key => $historia) {
                        if ($key == $index) {
                            foreach ($historia as $chave => $lore) {
                                if (isset($lore['p2'])) {
                                    echo '<div class="mb-4">';
                                    echo "<img src='./img/" . $lore['p2'] . "'class='img-fluid' width='250px'></img>";
                                    echo '</div>';
                                }
                                if (isset($lore['hp2'])) {
                                    echo '<div>';
                                    echo $lore['hp2'];
                                    echo '</div>';
                                }
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="card">
                <div class="card-body d-flex flex-column align-items-center h-100">
                    <?php
                    foreach ($page as $key => $historia) {
                        if ($key == $index) {
                            foreach ($historia as $chave => $lore) {
                                if (isset($lore['p3'])) {
                                    echo '<div class="mb-5">';
                                    echo "<img src='./img/" . $lore['p3'] . "'class='img-fluid' width='250px'></img>";
                                    echo '</div>';
                                }
                                if (isset($lore['hp3'])) {
                                    echo '<div class="mb-5">';
                                    echo $lore['hp3'];
                                    echo '</div>';
                                }
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="back-foot">
            <div class="topicos">
                <ul>
                    <li><a href="#">Termos de uso</a></li>
                    <li><a href="#">Novidades</a></li>
                    <li><a href="#">Aplicativos</a></li>
                </ul>
            </div>
            <div class="social-media">
                <a href="#" class="social-icon">Twitter</a>
            </div>
            <div class="copyright">
                <p>&copy; 2024 Ramon. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>