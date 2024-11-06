<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require "referencias.php" ?>


</head>

<body onload="getLocation()">

    <form name="localizacao" id="localizacao">
        <!-- AQUI OS CAMPOS SERÃO USADOS PARA CAPTURAR A LATITUDE E LONGITUDE E GUARDAR EM INPUTS ESCONDIDAS -->
        <?php
        $latitude = $_POST["txtLatitude"];
        $longitude = $_POST["txtLongitude"];

        

        $src = "https://maps.google.com/maps?q=";
        $src = $src . $latitude . "," . $longitude;
        $src = $src . "&z=15&output=embed";

        ?>

        <div class="container">

            <div class="row">


                <?php require "cabecalho_pagina.php" ?>

                <div class="col-sm-12">
                    <!-- COLOCAR O CÓDIGO PARA GERAR o iframe dentro da função getlocation -->

                    <script>
                        //var lon = document.getElementById("txtLongitude").value;
                        //campoIFrame = document.getElementById("mapa");
                        // codigoMapa = "https://maps.google.com/maps?q=" + "-14.822154" + "," + "-39.027033" + "&z=15&output=embed";
                        //codigoMapa = latitude;
                        //alert(codigoMapa);
                        //campoIFrame.src = "https://maps.google.com/maps?q=" + "-14.822154" + "," + "-39.027033" + "&z=15&output=embed";
                    </script>
                    <iframe id="mapa" src="<?php echo $src ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


                </div>

                <div class="col-md-12" style="text-align: left;">

                    <a href="home_usuario.php">
                        <input type="button" class="btn btn-danger" value="Voltar">
                    </a>

                </div>

            </div>

            <?php require "rodape.php" ?>

        </div>

    </form>

</body>

</html>