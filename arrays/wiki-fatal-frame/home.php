<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatal Frame Wiki</title>
    <link rel="stylesheet" href="../../fatal.css">
    <link rel="stylesheet" href="./carrossel.css">
</head>

<body>
    <header>
        <nav class="menu-navegacao">
            <div>
                <img src="./fatal-logo.jpg" alt="logotipo" class="logo">
                <span class="titulo">FATAL FRAME: WIKI</span>
            </div>

            <ul>
                <li><a href="#">aokigahara</a></li>
                <li><a href="#">camera obskura</a></li>
            </ul>
        </nav>
    </header>

    <section class="geral">
        <div class="texto-secao">
            <p>Fatal Frame (conhecido como Project Zero, na Europa e Austrália e Zero (零?) no Japão[1]) é uma série de jogos eletrônicos de survival horror desenvolvida pela Koei Tecmo (originalmente Tecmo). O jogo homônimo foi lançado em 2001 para PlayStation 2. A série principal, atualmente, conta com cinco títulos e o enredo é centrado em eventos sobrenaturais envolvendo antigas superstições japonesas. No decorrer da trama, os personagens são atacados por diferentes aparições e sua única forma de defesa é utilizando uma camera obscura, que permite ao jogador exorcizar os fantasmas tirando fotografias deles, selando seus espíritos em um filme.</p>

            <p>A série foi criada por Makoto Shibata e Keisuke Kikuchi. Depois dos jogos serem lançados no PlayStation 2 e após o sucesso da série Silent Hill, a dupla decidiu desenvolver uma série de terror inspirada nas próprias experiências espirituais e também em filmes de terror japoneses populares da época. Seu principal objetivo era fazer a experiência de jogo mais assustadora possível.</p>

            <p>A série recebeu aclamação da crítica, sendo classificada ao lado de outras séries de terror, incluindo Resident Evil e Silent Hill, entre os melhores jogos de survival horror existentes. Apesar da qualidade, os jogos nunca tiveram um número alto de vendas, a série como um todo vendeu mais de um milhão de cópias em todo o mundo a partir de abril de 2014. Várias adaptações da mídia japonesa foram feitas, incluindo mangás e um filme live-action em 2014.</p>
        </div>

        <div class="img-secao">
            <img src="./secao-fatal.jpg" alt="imagem do jogo">
        </div>

    </section>

    <div class="carrossel" id="jogos-carrossel">
        <div class="dentro-carrossel">
            <?php
            $jogos = [
                "Fatal Frame (2001)" => [
                    "nome" => "Fatal Frame",

                    "descricao" => "O primeiro jogo da série foi lançado para PlayStation 2 em 2001 no Japão e em 2002 na América do Norte e Europa. Um relançamento para o console Xbox foi lançado logo depois em ambos os territórios. A trama é ambientada no ano de 1986 e segue a história de dois irmãos chamados Miku e Mafuyu Hinasaki. Certo dia, Mafuyu decide investigar um caso de um famoso romancista que reside na mansão abandonada de Himuro. Após desaparecer no local, sua irmã Miku decide ir encontrá-lo. Durante sua exploração na mansão, ela descobre que lugar é assombrado por aparições que transitaram por aquele lugar e precisa sobreviver e descobrir a verdade por trás de um ritual sombrio que ocorreu na residência. A jogabilidade se concentra na exploração da dupla de irmãos na mansão e na luta contra fantasmas hostis que podem ser derrotados utilizando uma câmera especial.[5]",

                    "foto" => '<a href="#"><img src="./fatal-um.webp"></img></a>'
                ],

                "Fatal Frame (2003)" => [
                    "nome" => "Fatal Frame II: Crimson Butterfly (2003)",

                    "descricao" => "Crimson Butterfly é o segundo título da série Fatal Frame e apresenta uma história independente com poucas relações com o primeiro título. A sequência foi lançada inicialmente para PlayStation 2 em 2003 na América do Norte e Japão e uma recriação desenvolvida para o Wii foi lançada em 2012 no Japão e Europa. A história segue as irmãs gêmeas Mio e Mayu Amakura enquanto exploram uma vila abandonada e experimentam encontros com criaturas paranormais. Suas vidas tornam-se ameaçadas quando os espíritos da aldeia começam a possuir o corpo de Mayu com o objetivo de realizar um sacrifício para um ritual antigo. Os jogadores devem usar uma câmera com poderes de exorcismo para derrotar inimigos e descobrir os segredos da aldeia.",

                    "foto" => '<a href="#"><img src="./fatal-dois.webp"></img></a>'
                ],

                "Fatal Frame (2005)" => [
                    "nome" => "Fatal Frame III: The Tormented (2005)",

                    "descricao" => "A história segue a fotógrafa Rei Kurosawa que foi encarregada de tirar fotos de uma mansão abandonada. Depois que ela vê uma aparição de seu noivo que ela perdeu recentemente em um acidente de carro, os eventos rapidamente tomam um rumo paranormal que faz a protagonista explorar a mansão em seus sonhos e descobre de sua conexão com aqueles que sofrem de culpa sobrevivente.",

                    "foto" => '<a href="#"><img src="./fatal-tres.webp"></img></a>'
                ],

                "Fatal Frame (2008)" => [
                    "nome" => "Fatal Frame: Mask of the Lunar Eclipse (2008)",

                    "descricao" => "Em 2008, Fatal Frame: Mask of the Lunar Eclipse foi lançado para Wii apenas no Japão. A Tecmo compartilhou o desenvolvimento do título com a Nintendo SPD e a Grasshopper Manufacture. O enredo do jogo se passa na Ilha Rougetsu no qual um incidente provocado por razões desconhecidas afetou um grupo de garotas que foi mantida em cativeiro. Anos após seu resgate, ainda sofrendo de amnésia, uma das garotas chamada Ruka e duas outras sobreviventes retornam à ilha para buscar a verdade. A jogabilidade, assim como nos títulos anteriores, gira em torno da personagem principal explorando ambientes e enfrentando fantasmas hostis usando a Câmera Obscura.[6][7]",

                    "foto" => '<a href="#"><img src="./fatal-quatro.webp"></img></a>'
                ],

                "Fatal Frame (2015)" => [
                    "nome" => "Fatal Frame: Maiden of Black Water (2015)",

                    "descricao" => "O quinto título da franquia foi lançado para o Wii U em 2014 no Japão e em 2015 para os outros territórios. A história, que se passa na fictícia Montanha Hikami, concentra em três protagonistas que são atraídas por eventos sobrenaturais que acontecem na área, incluindo um ritual antigo para selar a Água Negra, uma força malévola que corrompe os espíritos circundantes que está ligado ao destino da donzela do santuário Ose Kurosawa. Em 2021, em comemoração do 20º aniversário da série, a Koei Tecmo lançou uma remasterização do jogo para PlayStation 4, PlayStation 5, Xbox One, Xbox Series X|S, Nintendo Switch e Microsoft Windows.[8]",

                    "foto" => '<a href="#"><img src="./fatal-cinco.jpg"></img></a>'
                ]
            ];

            foreach ($jogos as $jogo) {
                echo "<div class='carrossel-item'>";
                echo $jogo['foto'];
                echo "<div class='legenda'>";
                echo "<h5>{$jogo['nome']}</h5>";
                echo "<p>{$jogo['descricao']}</p>";
                echo "</div></div>";
            }
            ?>
        </div>
        <button class="carrossel-controle volta" onclick="moveSlide(-1)">&laquo;</button>
        <button class="carrossel-controle prox" onclick="moveSlide(1)">&raquo;</button>
        <aside></aside>
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


    <script src="./fatal-script.js"></script>


</body>

</html>