<?php

include_once("../connection/db.php");

if(isset($_POST['update'])) {
    $Codigo = $_POST['Codigo'];
    $part = $_POST['peca'];
    $manufacturer = $_POST['fabricante'];
    $description = $_POST['descricao'];
    $quantity = $_POST['quantidade'];

    $sql = "UPDATE pecas SET nome='$part', fabricante='$manufacturer', descricao='$description',
    quantidade='$quantity' WHERE Codigo=$Codigo";

    $res = $conn ->query($sql);
}
print"<script>alert('Peça atualizada com sucesso.')</script>";
print"<script> location.href='../read.php'</script>";
?>