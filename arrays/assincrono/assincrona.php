<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bomboniere</title>
    <link rel="stylesheet" href="doces.css">
</head>

<body>
    <div class="flex">
        <div class="grid">

            <?php
            $doces = [
                "Twix" => [
                    "nome" => "Twix",
                    "preco" => 3.99,
                    "descricao" => "Doce de chocolate com caramelo e nozes",
                    "foto" => '<img src="./twix.jpg"></img>'
                ],

                "Trento" => [
                    "nome" => "Trento",
                    "preco" => 4.99,
                    "descricao" => "Doce de chocolate",
                    "foto" => '<img src="./trento.jpg"></img>'
                ],

                "Suflair" => [
                    "nome" => "Suflair",
                    "preco" => 7.99,
                    "descricao" => "Doce de chocolate aerado",
                    "foto" => '<img src="./suflair.webp"></img>'
                ],

                "Bis" => [
                    "nome" => "Bis",
                    "preco" => 8.99,
                    "descricao" => "Doce de pequenos chocolates, extramamente viciante",
                    "foto" => '<img src="./bis.jpg"></img>'
                ],

                "KitKat" => [
                    "nome" => "KitKat",
                    "preco" => 8.99,
                    "descricao" => "Doce de chocolate com biscoito ao leite",
                    "foto" => '<img src="./kitkat.jpg"></img>'
                ],

                "Talento" => [
                    "nome" => "Talento",
                    "preco" => 5.99,
                    "descricao" => "Doce de chocolate com avelã",
                    "foto" => '<img src="./talento.avif"></img>'
                ]
            ];

            foreach ($doces as $chave => $valor) {
                echo  '<div class="card">';
                echo  '<h2>' . $valor['nome'] . '</h2>';
                echo  '<p class="descricao">' . $valor['descricao'] . '</p>';
                echo  '<p class="preco">R$ ' . $valor['preco'] . '</p>';

                echo  $valor['foto'];
                echo  '</div>';
            }
            ?>

        </div>
    </div>

</body>

</html>