<?php
require_once('../connection/db.php');

session_start();

$nome = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM users WHERE usuario = '{$nome}' AND senha = '{$senha}'";
$enviar = $conn ->query($sql);

if (mysqli_num_rows($enviar) > 0) {
    $_SESSION['usuario'] = $nome;
    $_SESSION['senha'] = $senha;
    header('location: ../site.php');
}
else {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    print"<script> alert('Nenhum usuário encontrado.')</script>";
    print"<script> location.href='../index.php'; </script>";
}
