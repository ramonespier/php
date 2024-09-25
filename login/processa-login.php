<?php
$html = "";

if(isset($_POST['usuario'], $_POST['senha'])) {

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    
    if ($usuario === 'admin' && $senha === '123@321') {
        $html = 'Bem vindo, administrador';
    
    } else {
        $html = 'Acesso negado.';
    }

    $html .='<a class="home" href="/php/login/processa-login.php">Voltar</a>';

} else {
    $html = '<section class="inputs">
        <div class="titulo">
            <h1>Login</h1>
        </div>

        <form action="processa-login.php" method="POST" class="section-form">

            <input class="nome-idade" type="text" name="usuario" placeholder="Insira o seu nome de usuário" required>
            <input class="nome-idade" type="password" name="senha" placeholder="Insira sua senha" required>
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

