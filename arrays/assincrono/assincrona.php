<?php
$doces = [
    "Twix" => [
        "nome" => "Twix",
        "preco" => 3.99,
        "descricao" => "Doce de chocolate com caramelo e nozes",
        "foto" => "https://t4.ftcdn.net/jpg/05/50/22/45/360_F_550224506_0KRvZE9szzIOeFIWfRKzfTd8Va3GELnD.jpg" // nao entendi a parte de imagens :/
    ],

    "Trento" => [
        "nome" => "Trento",
        "preco" => 4.99,
        "descricao" => "Doce de chocolate",
        "foto" => "https://images-na.ssl-images-amazon.com/images/I/51VGZHO8HkL.jpg"
    ],

    "Suflair" => [
        "nome" => "Suflair",
        "preco" => 7.99,
        "descricao" => "Doce de chocolate aerado",
        "foto" => "https://cdn.awsli.com.br/400x400/1957/1957771/produto/104770016/suflair-50g-cx-uohhltgdxv.png"
    ],

    "Bis" => [
        "nome" => "Bis",
        "preco" => 8.99,
        "descricao" => "Doce de pequenos chocolates, extramamente viciante",
        "foto" => "https://cdn.dooca.store/259/products/chocolate-bis-ao-leite-1008g-lacta_640x640+fill_ffffff.jpg?v=1701099483&webp=0"
    ],

    "KitKat" => [
        "nome" => "KitKat",
        "preco" => 8.99,
        "descricao" => "Doce de chocolate com biscoito ao leite",
        "foto" => "https://t3.ftcdn.net/jpg/04/84/89/10/360_F_484891061_wO3qH6EiQVAxeRBNafqFH7K0mtLnPXmU.jpg"
    ],
    
    "Talento" => [
        "nome" => "Talento",
        "preco" => 5.99,
        "descricao" => "Doce de chocolate com avelã",
        "foto" => "https://www.garoto.com.br/sites/default/files/2021-04/Talento_Choc_Avela.jpg"
    ]
];

foreach ($doces as $chave => $valor) {
    if (is_array($valor)) {
        echo "<br> $chave: <br>";
        foreach ($valor as $descricao => $conteudo) {
            echo "$descricao: $conteudo <br>";
        }

    } else {
        echo "$chave: $valor <br>";
    }
}
