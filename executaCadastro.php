<?php
/**
 * Created by PhpStorm.
 * User: Pietro
 * Date: 17/10/2016
 * Time: 12:33
 */

    include "settings/connection.php";
    include "assets/header.php";

    $nomeProp = $_POST['nomeProp'];
    $nomeFazenda = $_POST['nomeFazenda'];
    $regiaoFazenda = $_POST['regiaoFazenda'];
    $tipoCriacao = $_POST['tipoCriacao'];
    $porteProdutor = $_POST['porteProdutor'];
    $periodoColeta = $_POST['periodoColeta'];
    $composteira = $_POST['composteira'];
    $usuario = $_POST['usuario'];
    $senha = md5($_POST['senha']);
    $email = $_POST['email'];
    $telefone = preg_replace('/[^[:alnum:]_]/', '',$_POST['telefone']);

    if(empty($_POST['nomeProp']) || empty($_POST['nomeFazenda']) || empty($_POST['regiaoFazenda']) || empty($_POST['tipoCriacao']) || empty($_POST['porteProdutor']) || empty($_POST['periodoColeta']) || empty($_POST['composteira']) || empty($_POST['usuario']) || empty($_POST['senha']) || empty($_POST['email']) || empty($_POST['telefone'])) {  ?>
    <!doctype html>
    <html lang="pt">
        <head>
            <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
            <meta charset="UTF-8">
        <title>Restrito</title>
        </head>
        <body class="restrict">

        <div class="alert alert-danger col-sm-8 text-center center-block "><b>ATENÇÃO!</b> Digite todos os campos</div>
        <meta HTTP-EQUIV='refresh' CONTENT='2;URL=cadastro.php'>
        </body>
    </html>
   <?php }
    $consultaUsuario = "SELECT usuario FROM prop_user WHERE usuario = '$usuario'";
    $queryUsuario = $conn -> prepare($consultaUsuario);
    $queryUsuario -> execute();

    $contaUsuario = $queryUsuario -> rowCount();
    if ($contaUsuario > 0) { ?>
        <meta charset="UTF-8">
        <body class="restrict">
        <div class="alert alert-danger col-sm-8 text-center center-block "><b>ATENÇÃO!</b> Ja existe esse USUÁRIO cadastrado</div>
        <meta HTTP-EQUIV='refresh' CONTENT='2;URL=cadastro.php'>
        </body>
    <?  } else {

/**
 *  INSERE PROPRIETARIO
 */
        
        $insereProp = "INSERT INTO prop_user (usuario, senha, nomeProp, nomeFazenda,
                                              regiao_fazenda, tipoCriacao, porteProdutor, telefone, email, periodoColeta,
                                              sistemaCompotera, tipo)
                       VALUES (:usuario, :senha, :nomeProp, :nomeFazenda, :regiaofazenda, :tipoCriacao, :porteProdutor, :telefone, :email, :periodoColeta, :sistemaCompotera, :tipo)";


/**
 * Adiciona valores ao INSERT, ex: ':nomeProp'
 */
        
        $preparaInsere = $conn -> prepare($insereProp);
            $preparaInsere -> bindValue(':usuario', $usuario, PDO::PARAM_STR);
            $preparaInsere -> bindValue(':senha', $senha, PDO::PARAM_STR);
            $preparaInsere -> bindValue(':nomeProp', $nomeProp, PDO::PARAM_STR);
            $preparaInsere -> bindValue(':nomeFazenda', $nomeFazenda, PDO::PARAM_STR);
            $preparaInsere -> bindValue(':regiaofazenda', $regiaoFazenda, PDO::PARAM_STR);
            $preparaInsere -> bindValue(':tipoCriacao', $tipoCriacao, PDO::PARAM_STR);
            $preparaInsere -> bindValue(':porteProdutor', $porteProdutor, PDO::PARAM_STR);
            $preparaInsere -> bindValue(':telefone', $telefone, PDO::PARAM_STR);
            $preparaInsere -> bindValue(':email', $email, PDO::PARAM_STR);
            $preparaInsere -> bindValue(':periodoColeta', $periodoColeta, PDO::PARAM_STR);
            $preparaInsere -> bindValue(':sistemaCompotera', $composteira, PDO::PARAM_STR);
            $preparaInsere -> bindValue(':tipo', 'Produtor', PDO::PARAM_STR);
        $preparaInsere -> execute();


/**
 * Verifica se funcionou o INSERT
 */
        
        if($preparaInsere == true) { ?>
            <meta charset="UTF-8">
                <body class="restrict">
                <div class="alert alert-success col-sm-8 text-center center-block "><b>Você foi cadastrado com Sucesso!</div>
                <meta HTTP-EQUIV='refresh' CONTENT='2;URL=index.php'>
            </body>
    <?  } else {
           echo mysql_error();
        }
    }

?>

