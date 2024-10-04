<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require "referencias.php";
    require "config_bd.php";
    ?>

    <script src="localizacao.js"></script>
</head>

<body onload="getLocation();">
    <form name="localizacao" method="post" action="../controller/coleta_solicitar_salvar.php" enctype="multipart/form-data">

        <div class="container">

            <div class="row">


                <?php require "cabecalho_pagina.php" ?>

                <div class="col-md-12">
                    <textarea class="form-control" name="descricao" placeholder="Descrição do material a ser coletado"></textarea>
                </div>

                <div class="col-md-6" style="text-align: left;">
                <label class="label" >Selecione o tipo do material</label>
                    <select name="selectIdTipoMaterial" class="form-control">

                        <option>Papel</option>
                        <option>Plástico</option>
                        <option>Vidro</option>

                    </select>

                </div>

                <div class="col-md-6" style="text-align: left;">
                <label class="label" >Data para coleta</label>
                    <input type="date" class="form-control" placeholder="Data para coleta">
                </div>

                <div class="col-md-12" style="text-align: left;">
                    <label class="label">Envie uma foto do local</label>

                    <input class="btn btn-btn-success" name="pic" type="file" accept="image/*">


                </div>





                <div class="col-md-6">
                    <input type="text" class="input" name="txtLatitude">
                </div>
                <div class="col-md-6">

                    <input type="text" class="input" name="txtLongitude">
                </div>



            </div>

            <div class="row">
                <div class="col-md-12" style="text-align: left;">


                

                    <input type="submit" class="btn btn-success" value="Solicitar" >
                </div>
            </div>





            <div class="row">
                <div class="col-md-12" style="text-align: left;">

                    <a href="home.php">
                        <input type="button" class="btn btn-danger" value="Voltar">
                    </a>

                </div>
            </div>

            <?php require "rodape.php" ?>



        </div>


        </div>

    </form>
</body>

</html>