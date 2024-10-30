<?php
require_once 'array-cadastro.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $novoCadastro = [
        'nome' => $nome,
        'email' => $email,
        'email' => $email,
    ];

    $cadastro[] = $novoCadastro;
    $_SESSION['cadastro'] = $cadastro;
}



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

            <input class="nome-idade" type="text" name="nome" placeholder="Insira o seu nome de usuário" required>
            <input class="nome-idade" type="text" name="email" placeholder="Insira o seu email" required>
            <input class="nome-idade" id="senha" type="text" name="senha" placeholder="Insira sua senha" required>
            <input class="nome-idade" id="confirma" type="text" name="confirma" placeholder="Confirme sua senha" required>
            <input type="submit" href="./processa-login.php" value="Enviar" class="enviar">
            <hr style="width: 100%;">

            <div class="redirect">
                <p>Ja tem conta? <a href="./processa-login.php">Faça login</a></p>
            </div>


        </form>
    </section>

    <script src="./cadastro.js"></script>
</body>

</html>