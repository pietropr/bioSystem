<?php
/**
 * Created by PhpStorm.
 * User: Pietro
 * Date: 14/10/2016
 * Time: 18:10
 */
?>

<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro Proprietário</title>
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
<body class="cadastro">
    <div class="container">
        <div class="col-sm-8 center-block animated fadeInDown">
            <h4 class="text-center">Parte Geral</h4>
            <hr>


            <form class="form" method="post" action="executaCadastro.php">
                <div class="grid-column">
                    <div class="input-group">
                        <span class="glyphicon glyphicon-user input-group-addon" id="nomeProp"></span>
                        <input type="text" name="nomeProp" class="form-control" placeholder="Nome Proprietário" aria-describedby="nomeProp">
                    </div>

                    <div class="input-group">
                        <span class="glyphicon glyphicon-home input-group-addon" id="nomeFazenda"></span>
                        <input type="text" name="nomeFazenda" class="form-control" placeholder="Nome Fazenda" aria-describedby="nomeFazenda">
                    </div>

                    <div class="input-group">
                        <span class="glyphicon glyphicon-home input-group-addon" id="regiaoFazenda"></span>
                        <input type="text" name="regiaoFazenda" class="form-control" placeholder="Regiao da Fazenda" aria-describedby="regiaoFazenda">
                    </div>

                    <div class="input-group select">

                        <select id="tipoCriacao" name="tipoCriacao" class="form-control tipoCriacao"">
                            <option selected class="selected" value="">Tipo de criacao</option>
                            <option name="Bovina" value="Bovina">Bovina</option>
                            <option name="Suina" value="Suina">Suina</option>
                            <option name="Poedeiras" value="Poedeiras">Poedeiras</option>
                            <option name="CamadeFrango" value="CamadeFrango">Cama de Frango</option>
                            <option name="Bubalinos" value="Bubalinos">Bubalinos</option>
                        </select>

                        <select id="porteProdutor" name="porteProdutor" class="form-control porteProdutor"">
                            <option  class="selected" selected value="">Porte do Produtor</option>
                            <option name="Pequeno" value="Pequeno">Pequeno</option>
                            <option name="Medio" value="Medio">Medio</option>
                            <option name="Grande" value="Grande">Grande</option>

                        </select>
                    </div>

                    <div class="input-group">
                        <span class="glyphicon glyphicon-time input-group-addon" id="periodoColeta"></span>
                        <input type="text" name="periodoColeta" class="form-control" placeholder="Periodo de coleta (Diario ou Semanal)" aria-describedby="periodoColeta">
                    </div>

                    <div class="input-group ">
                        <p>Sistema Composteira:<br>
                            <input type="radio" name="composteira" value="sim" class=""> Sim
                            <input type="radio" name="composteira" value="nao" class=""> Não<br></p>
                    </div>

                    <hr>
                    <h4 class="text-center">Informações para Login</h4>

                    <div class="input-group">
                        <span class="glyphicon glyphicon-user input-group-addon" id="usuario"></span>
                        <input type="text" name="usuario" class="form-control" placeholder="Usuario" aria-describedby="usuario">
                    </div>

                    <div class="input-group">
                        <span class="glyphicon glyphicon-eye-close input-group-addon" id="senha"></span>
                        <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" aria-describedby="Senha">
                    </div>

                    <div class="input-group">
                        <span class="glyphicon glyphicon-eye-close input-group-addon" id="resenha"></span>
                        <input type="password" id="resenha" name="resenha" class="form-control" placeholder="Redigite sua Senha" aria-describedby="resenha">
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon" id="email">@</span>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Email" aria-describedby="email">
                    </div>

                    <div class="input-group">
                        <span class="glyphicon glyphicon-phone input-group-addon" id="telefone"></span>
                        <input type="text" id="inputTelefone" name="telefone" class="form-control" placeholder="Telefone com DDD (Apenas números)" aria-describedby="telefone">
                    </div>

                    <input type="submit" value="Cadastrar" class="btn btn-success">
                    <input type="reset" value="Limpar" class="btn btn-primary">
                    <a href="index.php" class="btn btn-warning">Voltar</a>

                </div>

            </form>

        </div>
    </div>
</body>
</html>
