<?php
session_start();

$cadastro = [
    [
    'nome' => 'Ramon Coelho',
    'email' => 'ramon@email.com',
    'senha' => 'senha123'
    ]
];


if (!isset($_SESSION['cadastro'])) {
    $_SESSION['cadastro'] = $cadastro;

} else {
    $cadastro = $_SESSION['cadastro'];
}
?>