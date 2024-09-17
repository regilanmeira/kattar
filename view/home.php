<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php require "referencias.php" ?>


</head>

<body onload="getLocation()">
<form   name="localizacao" id="localizacao" method="post">
        <!-- AQUI OS CAMPOS SERÃO USADOS PARA CAPTURAR A LATITUDE E LONGITUDE E GUARDAR EM INPUTS ESCONDIDAS -->
        <input type="hidden" class="input" id="txtLatitude" name="txtLatitude">
        <input type="hidden" class="input" id="txtLongitude" name="txtLongitude">
    <div class="container">
        <div class="row">
            <?php require "cabecalho_pagina.php" ?>

            <div class="col-md-4">
                <input type="submit" class="btn btn-success" formaction="coleta_solicitar.php" value="Coleta" />
            </div>
            <div class="col-md-4">
                <input type="submit" class="btn btn-success" formaction="coleta_historico.php" value="Exibir histórico" />
            </div>
            <div class="col-md-4">
                <input type="submit" class="btn btn-success" formaction="coleta_instrucoes.php" value="Instruções informativas" />
            </div>
            <div class="col-md-4">
                <input type="submit" class="btn btn-success" formaction="coleta_mostrar_locacalizacao.php"  value="Exibir pontos de coleta" name="btLocalizacao" id="btLocalizacao"/>
            </div>


        </div>

        <?php require "rodape.php" ?>

        


    </div>
</form>

</body>

</html>