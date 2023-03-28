<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/create.css">
    <link rel="shortcut icon" type="image/png" href="assets/systec-logo.png">
    <title>Adicionar Peças - SysTec</title>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="assets/systec-logo.png" alt="Logo da SysTec">
        </div>
        <form action="authentication/createAuth.php" method="post">
            <div class="part">
                <label for="part">Peça</label>
                <input type="text" class="form-control" name="peca" id="part">
            </div>
            <div class="manufacturer">
                <label for="manufacturer">Fabricante</label>
                <input type="text" class="form-control" name="fabricante" id="manufacturer">
            </div>
            <div class="description">
                <label for="description">Descrição</label>
                <input type="text" class="form-control" name="descricao" id="description">
            </div>
            <div class="quantity">
                <label for="quantity">Quantidade</label>
                <input type="text" class="form-control" name="quantidade" id="quantity">
            </div>
            <div class="button">
                <input type="submit" value="Adicionar" class="btn btn-block btn-primary">
            </div>
        </form>
        <div class="back">
            <a href="site.php">< Voltar</a>
        </div>
    </div>
</body>
</html>