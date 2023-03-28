<?php

require_once("../connection/db.php");

$part = $_POST['peca'];
$manufacturer = $_POST['fabricante'];
$description = $_POST['descricao'];
$quantity = intval($_POST['quantidade']);

if (($part != "") && ($manufacturer != "") && ($description != "")) {
    $sql = "INSERT pecas (nome,fabricante,descricao,quantidade) VALUES 
    ('{$part}','{$manufacturer}','{$description}','{$quantity}')";

    $enviar = $conn ->query($sql);

    if ($enviar == true) {
        print"<script>alert('Peça adicionada com sucesso.')</script>";
        print"<script> location.href='../create.php'</script>";
    }
    else {
        print"<script>alert('Erro: Não foi possível adicionar a peça.')</script>";
        print"<script> location.href='../create.php'</script>";
    }
}
else {
    print"<script>alert('Erro: Os campos nome, fabricante e descrição devem ser preenchidos.')</script>";
    print"<script> location.href='../create.php'</script>";
}