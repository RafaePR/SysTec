<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/site.css">
    <link rel="shortcut icon" type="image/png" href="assets/systec-logo.png">
    <title>Estoque - SysTec</title>
    <?php
    session_start();
    if ((!isset($_SESSION['usuario']) == true) && (!isset($_SESSION['senha']) == true)) {
        header('location: ../index.php');
    }
    $logado = $_SESSION['usuario'];
    ?>
</head>
<body>
    <header>
        <div class="logo">
            <img src="assets/systec-logo.png" alt="Logo da SysTec">
        </div>
        <div class="user">
            <h1>Olá <?php echo $logado ?>.</h1>
            <?php echo '<a href="authentication/logout.php?token='.md5(session_id()).'">Sair</a>'?>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="title">
                <h1>Gerenciar o Estoque da SysTec</h1>
            </div>
            <div class="menu">
                <a href="create.php">Adicionar peças</a>
                <a href="read.php">Listar peças</a>
            </div>
        </div>
    </section>
</body>
</html>