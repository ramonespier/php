<?php
if (isset($_POST['usuario'], $_POST['senha'], $_POST['confirma'])) {

    $usuario[$_POST['usuario']];
    $senha = [$_POST['senha']];
    $confirma = [$_POST['confirma']];
};
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <section class="inputs">
        <div class="titulo">
            <h1>Cadastro</h1>
        </div>

        <form action="cadastro.php" method="POST" class="section-form">

            <input class="nome-idade" type="text" name="usuario" placeholder="Insira o seu nome de usuário" required>
            <input class="nome-idade" id="senha" type="text" name="senha" placeholder="Insira sua senha" required>
            <input class="nome-idade" id="confirma" type="text" name="confirma" placeholder="Confirme sua senha" required>


        </form>
    </section>

    <script src="./cadastro.js"></script>
</body>

</html>