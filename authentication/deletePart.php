<?php
    if(!empty($_GET['Codigo'])) {
        include_once("../connection/db.php");

        $Codigo = $_GET['Codigo'];

        $sqlSelect = "SELECT * FROM pecas WHERE Codigo = $Codigo";
        $res = $conn ->query($sqlSelect);

        if($res->num_rows > 0) {
            $sqlDelete = "DELETE FROM pecas WHERE Codigo = $Codigo";
            $resDelete = $conn ->query($sqlDelete);
        }
        else {
            header("Location: read.php");
        }
    print"<script>alert('Peça deletada com sucesso.')</script>";
    print"<script> location.href='../read.php'</script>";
    }
?>