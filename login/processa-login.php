<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if ($usuario === 'admin' && $senha === '123@321') {
    echo 'Bem vindo, administrador';

} else {
    echo 'Acesso negado.';
}
