<?php
/**
 * Created by PhpStorm.
 * User: Pietro
 * Date: 14/10/2016
 * Time: 16:16
 */

ob_start();
session_start();

if(!isset($_SESSION['proprietarioUser']) && (!isset($_SESSION['proprietarioId']))) { ?>

    <!doctype html>
    <html lang="pt">
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
        <title>Restrito</title>
    </head>
    <body class="restrict">

        <div class="alert alert-danger col-sm-8 text-center center-block " id="<? echo $_SESSION['proprietarioUser'] ?>?"><b>ATENÇÃO!</b> Você não tem permissão para acessar essa página ou não se logou. Por favor <a href="../../bioSystem/index.php">clique aqui</a> para se conectar</div>
    </body>
    </html>


<?php die; }

?>

