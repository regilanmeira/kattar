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
                <input type="submit" class="btn btn-success" formaction="coleta_solicitacoes_geral.php" value="Coletas solicitadas" />
            </div>

           

                   
            <div class="col-md-4">
                <input type="submit" class="btn btn-success" formaction="tipo_material_cadastrar.php"  value="Cadastrar tipo de material" name="btTipoMaterial" id="btTipoMaterial"/>
            </div>


            <div class="col-md-4">
                <input type="submit" class="btn btn-success" formaction="associado_cadastrar.php"  value="Cadastrar associado" name="btAssociado" id="btAssociado"/>
            </div>

            <div class="col-md-4">
                <input type="submit" class="btn btn-success" formaction="status_coleta_cadastrar.php"  value="Cadastrar status da coleta" name="btStatus" id="btStatus"/>
            </div>

            <div class="col-md-4">
                <input type="submit" class="btn btn-success" formaction="coleta_instrucoes.php" value="Instruções informativas" />
            </div>


        </div>

        <?php require "rodape.php" ?>

        


    </div>
</form>

</body>

</html>