<?php
$jogos = [
    "Fatal Frame (2001)" => [
        "nome" => "Fatal Frame",

        "descricao" => "O primeiro jogo da série foi lançado para PlayStation 2 em 2001 no Japão e em 2002 na América do Norte e Europa. Um relançamento para o console Xbox foi lançado logo depois em ambos os territórios. A trama é ambientada no ano de 1986 e segue a história de dois irmãos chamados Miku e Mafuyu Hinasaki. Certo dia, Mafuyu decide investigar um caso de um famoso romancista que reside na mansão abandonada de Himuro. Após desaparecer no local, sua irmã Miku decide ir encontrá-lo. Durante sua exploração na mansão, ela descobre que lugar é assombrado por aparições que transitaram por aquele lugar e precisa sobreviver e descobrir a verdade por trás de um ritual sombrio que ocorreu na residência. A jogabilidade se concentra na exploração da dupla de irmãos na mansão e na luta contra fantasmas hostis que podem ser derrotados utilizando uma câmera especial.[5]",

        "foto" => '<img src="./fatal-um.webp"></img>'
    ],

    "Fatal Frame (2003)" => [
        "nome" => "Fatal Frame II: Crimson Butterfly (2003)",

        "descricao" => "Crimson Butterfly é o segundo título da série Fatal Frame e apresenta uma história independente com poucas relações com o primeiro título. A sequência foi lançada inicialmente para PlayStation 2 em 2003 na América do Norte e Japão e uma recriação desenvolvida para o Wii foi lançada em 2012 no Japão e Europa. A história segue as irmãs gêmeas Mio e Mayu Amakura enquanto exploram uma vila abandonada e experimentam encontros com criaturas paranormais. Suas vidas tornam-se ameaçadas quando os espíritos da aldeia começam a possuir o corpo de Mayu com o objetivo de realizar um sacrifício para um ritual antigo. Os jogadores devem usar uma câmera com poderes de exorcismo para derrotar inimigos e descobrir os segredos da aldeia.",

        "foto" => '<img src="./fatal-dois.webp"></img>'
    ],

    "Fatal Frame (2005)" => [
        "nome" => "Fatal Frame III: The Tormented (2005)",

        "descricao" => "A história segue a fotógrafa Rei Kurosawa que foi encarregada de tirar fotos de uma mansão abandonada. Depois que ela vê uma aparição de seu noivo que ela perdeu recentemente em um acidente de carro, os eventos rapidamente tomam um rumo paranormal que faz a protagonista explorar a mansão em seus sonhos e descobre de sua conexão com aqueles que sofrem de culpa sobrevivente.",

        "foto" => '<img src="./fatal-tres.webp"></img>'
    ],

    "Fatal Frame (2008)" => [
        "nome" => "Fatal Frame: Mask of the Lunar Eclipse (2008)",

        "descricao" => "Em 2008, Fatal Frame: Mask of the Lunar Eclipse foi lançado para Wii apenas no Japão. A Tecmo compartilhou o desenvolvimento do título com a Nintendo SPD e a Grasshopper Manufacture. O enredo do jogo se passa na Ilha Rougetsu no qual um incidente provocado por razões desconhecidas afetou um grupo de garotas que foi mantida em cativeiro. Anos após seu resgate, ainda sofrendo de amnésia, uma das garotas chamada Ruka e duas outras sobreviventes retornam à ilha para buscar a verdade. A jogabilidade, assim como nos títulos anteriores, gira em torno da personagem principal explorando ambientes e enfrentando fantasmas hostis usando a Câmera Obscura.[6][7]",

        "foto" => '<img src="./fatal-quatro.webp"></img>'
    ],

    "Fatal Frame (2015)" => [
        "nome" => "Fatal Frame: Maiden of Black Water (2015)",

        "descricao" => "O quinto título da franquia foi lançado para o Wii U em 2014 no Japão e em 2015 para os outros territórios. A história, que se passa na fictícia Montanha Hikami, concentra em três protagonistas que são atraídas por eventos sobrenaturais que acontecem na área, incluindo um ritual antigo para selar a Água Negra, uma força malévola que corrompe os espíritos circundantes que está ligado ao destino da donzela do santuário Ose Kurosawa. Em 2021, em comemoração do 20º aniversário da série, a Koei Tecmo lançou uma remasterização do jogo para PlayStation 4, PlayStation 5, Xbox One, Xbox Series X|S, Nintendo Switch e Microsoft Windows.[8]",

        "foto" => '<img src="./fatal-cinco.jpg"></img>'
    ]
];

echo '<pre>';

$index = $_GET['index'];
echo $index . '<br>';
// print_r($jogos[$index]);

echo '</pre>';

$jogo = $jogos[$index];
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>
            <?php
                echo $jogo['nome']
            ?>
        </h1>
        
        
</body>
</html>
