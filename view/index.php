<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=" device-widt, initial-scale=1.0">

    <?php require "referencias.php" ?>
</head>

<body>

    <div class="container">
        <form method="post">
            <div class="row">

                <div class="col-sm-12">
                    <?php require "cabecalho_pagina.php" ?>
                    <h1>Bem-vindo!</h1>
                </div>

                <div class="col-sm-12">
                    <input type="submit" class="btn btn-success" formaction="conta_entrar.php" value="Entrar">
                    <input type="submit" class="btn btn-success" formaction="conta_criar.php" value="Criar conta">
                </div>

            </div>

        </form>
    </div>

</body>

</html>