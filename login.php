<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" type="image/png" href="assets/systec-logo.png">
    <title>Entrar - SysTec</title>
</head>
<body>
    <section>
        <div class="container">
            <div class="logo">
                <img src="assets/systec-logo.png" alt="Logo da SysTec">
            </div>
            <form action="authentication/loginAuth.php" method="post">
                <div class="username">
                    <label for="username">Usuário</label>
                    <input type="text" class="form-control" name="usuario" id="username">
                </div>
                <div class="password">
                    <label for="password">Senha</label>
                    <input type="text" class="form-control" name="senha" id="password">
                </div>
                <div class="button">
                    <input type="submit" value="Entrar" class="btn btn-block btn-primary">
                </div>
            </form>
            <div class="back">
                <a href="index.php">< Voltar</a>
            </div>
        </div>
    </section>
</body>
</html>