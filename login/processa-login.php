<?php

require_once 'array-cadastro.php';

$html = "";

if(isset($_POST['nome'], $_POST['senha'], $_POST['email'])) {

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    
    if ($nome === $cadastro['nome'] && $senha === $cadastro['senha'] && $email === $cadastro['email']) {
        $html = 'Login bem-sucedido';
    
    } else {
        $html = 'Verifique se o email ou a senha estão corretos.';
    }

    $html .='<a class="home" href="/php/login/processa-login.php">Voltar</a>'; 

} else {
    $html = '<section class="inputs">
        <div class="titulo">
            <h1>Login</h1>
        </div>

        <form action="processa-login.php" method="POST" class="section-form">

            <input class="nome-idade" type="text" name="nome" placeholder="Insira o seu nome de usuário" required>
            <input class="nome-idade" type="text" name="email" placeholder="Insira o seu email" required>
            <input class="nome-idade" type="text" name="senha" placeholder="Insira sua senha" required>
            <input class="enviar" type="submit" value="Enviar">

        </form>
    </section>';
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
<section class="secao-resposta">
        <div class="resposta">
            <?php
            echo $html;
            ?> 
        </div>
    </section>
</body>

</html>

