<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../../bioSystem/assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../bioSystem/assets/css/style.css">
    <link rel="stylesheet" href="../../bioSystem/assets/css/animate.css">
    <script src="../../bioSystem/assets/js/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script src="../../bioSystem/assets/js/jquery.mask.min.js"></script>
    <script src="../../bioSystem/assets/js/jquery.validate.min.js"></script>
    <script src="../../bioSystem/assets/bootstrap/js/bootstrap.js"></script>
    <script src="../../bioSystem/assets/js/script.js"></script>
</head>
<body class="inicial logado-<?php echo $_SESSION['proprietarioUser'];  ?> id-<?php echo $_SESSION['proprietarioId'];?>">
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <ul class="nav navbar-nav">
            <li><a href="inicial.jsp"><span class="glyphicon glyphicon-home" style="margin-right: 5px;"></span>Home</a></li>
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastros<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="../../bioSystem/cadastro/animais.php">Animais</a></li>
                </ul>
            </li>

        </ul>
        <div class="sair" style="float: right;">
            <ul class="nav navbar-nav">
                <li><p style="margin: 15px 0 !important; text-transform: capitalize; color: cornflowerblue;"><span class="glyphicon glyphicon-user" style="margin-right: 10px;"></span><?php echo $_SESSION['proprietarioUser']; ?></p>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Menu <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../../bioSystem/settings/sair.php">Sair</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

</nav>




