<?php
    if(!empty($_GET['Codigo'])) {
        include_once("connection/db.php");

        $Codigo = $_GET['Codigo'];

        $sql = "SELECT * FROM pecas WHERE Codigo = $Codigo";
        $res = $conn ->query($sql);

        if($res->num_rows > 0) {

            while($user_data = mysqli_fetch_assoc($res)) {
                $part = $user_data['nome'];
                $manufacturer = $user_data['fabricante'];
                $description = $user_data['descricao'];
                $quantity = intval($user_data['quantidade']);
            }
        }
        else {
            header("Location: read.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/create.css">
    <link rel="shortcut icon" type="image/png" href="assets/systec-logo.png">
    <title>Atualizar Peças - SysTec</title>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="assets/systec-logo.png" alt="Logo da SysTec">
        </div>
        <form action="authentication/updateSave.php" method="post">
            <div class="part">
                <label for="part">Peça</label>
                <input type="text" class="form-control" name="peca" id="part" value="<?php echo $part ?>">
            </div>
            <div class="manufacturer">
                <label for="manufacturer">Fabricante</label>
                <input type="text" class="form-control" name="fabricante" id="manufacturer" value="<?php echo $manufacturer ?>">
            </div>
            <div class="description">
                <label for="description">Descrição</label>
                <input type="text" class="form-control" name="descricao" id="description" value="<?php echo $description ?>">
            </div>
            <div class="quantity">
                <label for="quantity">Quantidade</label>
                <input type="text" class="form-control" name="quantidade" id="quantity" value="<?php echo $quantity ?>">
            </div>
            <input type="hidden" name="Codigo" value="<?php echo $Codigo ?>">
            <div class="button">
                <input type="submit" value="Atualizar" name="update" class="btn btn-block btn-primary" id="update">
            </div>
        </form>
        <div class="back">
            <a href="read.php">< Voltar</a>
        </div>
    </div>
</body>
</html>