<?php
/**
 * Created by PhpStorm.
 * User: Pietro
 * Date: 18/10/2016
 * Time: 08:41
 */

    include "connection.php";

    ob_start();
    session_start();

    unset($_SESSION['proprietarioId']);
    unset($_SESSION['proprietarioUser']);

    header('Location: ../index.php');


?>