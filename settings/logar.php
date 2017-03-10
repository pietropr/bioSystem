<?php
/**
 * Created by PhpStorm.
 * User: Pietro
 * Date: 14/10/2016
 * Time: 18:09
 */

    include "connection.php";
    echo "<link rel='stylesheet' href='../../bioSystem/assets/css/style.css'>";
    echo "<link rel='stylesheet' href='../../bioSystem/assets/bootstrap/css/bootstrap.css'>";
    ob_start();
    session_start();


/**
 * Recupera requisições POST do LOGIN
 */
    $usuario = strip_tags($_POST['usuario'] = preg_replace('/[^[:alpha:]_]/', '',$_POST['usuario']));
    $senha = strip_tags(md5($_POST['senha']));

/**
 * Faz a Query para buscar no banco USUARIO E SENHA
 */
    $selecionaUsuario = "SELECT * FROM prop_user WHERE usuario = :usuario AND senha = :senha";
    
    //prepara a query
    $queryUser = $conn -> prepare($selecionaUsuario);
    $queryUser -> bindValue(':usuario', $usuario, PDO::PARAM_STR);
    $queryUser -> bindValue(':senha', $senha, PDO::PARAM_STR);

    //executa a query
    $execute = $queryUser -> execute();

    //conta linha da query
    $rowCount = $queryUser -> rowCount();

    if ((empty($usuario)) || (empty($senha))) { ?>
        <div class="alert alert-danger col-sm-8 text-center center-block">ATENÇÃO! Dados inválidos, verifique-os com atenção</div>
        <meta HTTP-EQUIV='refresh' CONTENT='2;URL=../index.php'>
    <?php } else  if($rowCount < 1) { ?>
        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>ERRO</title>
        </head>
        <body>
            <div class="alert alert-danger col-sm-8 text-center center-block">ATENÇÃO! Dados inválidos, verifique-os com atenção</div>
            <meta HTTP-EQUIV='refresh' CONTENT='2;URL=../index.php'>
        </body>
        </html>    
<?php } else {

        /**
         *  Armazena em variaveis, o usuario e senha do banco
         */

        while ($fetch_user = $queryUser -> fetch(PDO::FETCH_ASSOC)) {
            $userBanco = $fetch_user['usuario'];
            $senhaBanco = $fetch_user['senha'];
            $idBanco = $fetch_user['idProp'];
        }



        if(($usuario == $userBanco) && ($senha = $senhaBanco)) {
           
            $_SESSION['proprietarioUser'] = $usuario;
            $_SESSION['proprietarioId'] = $idBanco;
            header('Location: ../inicial.php');

        }
    }


?>




