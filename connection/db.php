<?php

$host = 'localhost';
$user = 'root';
$password = '';
$data = 'systec';

$conn = mysqli_connect($host, $user, $password, $data);

if (!$conn) {
    echo"Erro na conexao com o banco de dados.".mysqli_error_connect();
}