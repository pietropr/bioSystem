<?php
/**
 * Created by PhpStorm.
 * User: Pietro
 * Date: 14/10/2016
 * Time: 16:26
 */
?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../bioSystem/assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../bioSystem/assets/css/style.css">
    <link rel="stylesheet" href="../../bioSystem/assets/css/animate.css">
    <script src="../../bioSystem/assets/js/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script src="../../bioSystem/assets/js/jquery.mask.min.js"></script>
    <script src="../../bioSystem/assets/js/jquery.validate.min.js"></script>
    <script src="../../bioSystem/assets/bootstrap/js/bootstrap.js"></script>
    <script src="../../bioSystem/assets/js/script.js"></script>
    <title>Bem vindo</title>
</head>
<body class="home">
    <div class="login-page">
        <div class="form">
            <form class="login-form" method="post" action="settings/logar.php">
                <input name="usuario" type="text" placeholder="usuario"/>
                <input name="senha" type="password" placeholder="senha"/>
                <input type="submit" class="btn btn-primary btn-block" />
            </form>
            <p class="message">Não é registrado ? <a href="cadastro.php">Cria uma conta</a></p>
        </div>
    </div>
</body>
</html>
