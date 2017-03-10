<?php

    include "../bioSystem/settings/connection.php";


    //pega o valor de CH4
    $pegaConstante = "SELECT * FROM constantes WHERE nome= 'Constante CH4'";
    $executaConstante = $conn -> prepare($pegaConstante);
    $executaConstante -> execute();
    //guarda o valor da formula
    $fetchConstante = $executaConstante -> fetch(PDO::FETCH_ASSOC);
    $constanteCH4 = $fetchConstante['valor'];


    //pega constantes de animaisw
    $CH4 = $constanteCH4 * 2.9  * 0.13 * 10;

    echo $CH4;

