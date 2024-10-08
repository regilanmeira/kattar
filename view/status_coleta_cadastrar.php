<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require "referencias.php" ?>
    
</head>
<body>
    <form method="post">
    <div class="container">
        <div class="row">

            <?php require "cabecalho_pagina.php" ?>

            <div class="col-md-12">
                <input type="text" class="form-control" required name="txtDescricao" placeholder="Descrição do status" />
            </div>
            
           

        </div>

        <div class="row">
            <div class="col-md-12" style="text-align: left;">


                <input type="submit" formaction="../controller/status_coleta_cadastrar_salvar.php" class="btn btn-success" value="Cadastrar">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="text-align: left;">

                <a href="home.php">
                <input  type="button" class="btn btn-danger" value="Cancelar">
                </a>
            </div>
        </div>

    </div>
    </form>
</body>
</html>