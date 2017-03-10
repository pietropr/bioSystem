<?php
/**
 * Created by PhpStorm.
 * User: Pietro
 * Date: 14/10/2016
 * Time: 16:03
 */

    $username = 'root';
    $password = 'root';

    //Tratamento de erros com a conexão.
    try{
        //Instância PDO de conexão com a base de dados.
        $conn = new PDO('mysql:host=localhost;dbname=biosystem', $username, $password);

        //Atribuição do erro de conexão.
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){

        //Exibe o erro da conexão.
        echo('A conexão falou. Erro: ' . $e -> getMessage());
    }

?>