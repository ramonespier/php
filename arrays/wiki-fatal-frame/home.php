<?php
require_once 'arrays-fatal.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatal Frame Wiki</title>
    <link rel="stylesheet" href="./fatal.css">
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
            foreach ($jogos as $key => $jogo) {
                echo "<div class='carrossel-item'>";
                echo $jogo['foto'];
                echo "<div class='legenda'>";
                echo "<a class='titulos' href='./artigo.php?index=" . $key . "'";
                echo "<h5>{$jogo['nome']}<br><span class='leia'>veja os protagonistas...</span></h5>";
                echo "</a>";
                echo "<p>{$jogo['descricao']}</p>";
                echo "</div></div>";
            };
            ?>
        </div>
        <button class="carrossel-controle volta" onclick="moveSlide(-1)">&laquo;</button>
        <button class="carrossel-controle prox" onclick="moveSlide(1)">&raquo;</button>
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